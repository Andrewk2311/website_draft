<?php
/**
 * WayMaker contact form handler for GoDaddy PHP hosting.
 * Expects POST from index.html (fetch with FormData).
 */
header('Content-Type: application/json; charset=UTF-8');
header('X-Content-Type-Options: nosniff');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['ok' => false, 'error' => 'Method not allowed']);
    exit;
}

$to = 'andrewk422@gmail.com';

// Honeypot — leave empty in HTML (hidden field). Bots often fill it.
if (!empty($_POST['website'] ?? '')) {
    echo json_encode(['ok' => true]);
    exit;
}

$name = isset($_POST['name']) ? trim((string) $_POST['name']) : '';
$email = isset($_POST['email']) ? trim((string) $_POST['email']) : '';
$company = isset($_POST['company']) ? trim((string) $_POST['company']) : '';
$message = isset($_POST['message']) ? trim((string) $_POST['message']) : '';

if ($name === '' || $email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(['ok' => false, 'error' => 'Please enter a valid name and email.']);
    exit;
}

// Plain-text body only; strip tags and control chars that could confuse mailers.
$strip = static function (string $s): string {
    $s = strip_tags($s);
    return str_replace(["\0", "\r"], '', $s);
};
$name = $strip($name);
$company = $strip($company);
$message = $strip($message);

$host = $_SERVER['HTTP_HOST'] ?? 'localhost';
$host = preg_replace('/:\d+$/', '', $host);
$fromEmail = 'noreply@' . $host;

$subject = 'WayMaker site: message from ' . $name;
$body = "Name: {$name}\nEmail: {$email}\nCompany / Brand: {$company}\n\nMessage:\n{$message}\n";

$encodedSubject = '=?UTF-8?B?' . base64_encode($subject) . '?=';

$headers = [
    'From: ' . $fromEmail,
    'Reply-To: ' . $email,
    'MIME-Version: 1.0',
    'Content-Type: text/plain; charset=UTF-8',
    'Content-Transfer-Encoding: 8bit',
];
$headerStr = implode("\r\n", $headers);

$sent = @mail($to, $encodedSubject, $body, $headerStr);

if (!$sent) {
    http_response_code(500);
    echo json_encode(['ok' => false, 'error' => 'Could not send message. Please try email instead.']);
    exit;
}

http_response_code(200);
echo json_encode(['ok' => true]);
