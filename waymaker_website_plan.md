---
name: WayMaker Website Build
overview: "Build a clean, professional WayMaker marketing site that matches the logo brand (navy #2C3E6C, gold #9B845C), implements Nol's requirements (hero clarity, services, credibility, contact/lead form), and adopts the structural cleanness of your First_Website reference—without copying its assets."
todos: []
isProject: false
---

# WayMaker Website Build Plan

## Summary of inputs

- **Draft:** [waymaker_homepage.html](waymaker_homepage.html) — structure is strong: hero, stats strip, Services, Channels, Process, CTA. Uses navy/gold and [WayMaker logo.png](WayMaker%20logo.png). Contains placeholder copy to replace.
- **Nol's requirements** ([notes_from_nol.md](notes_from_nol.md)): Hero headline that immediately says what Waymaker does; Services (brokerage, Costco Pharmacy, PriceSmart); **Credibility section** so brands trust quickly; **Contact / lead form** so the site is useful.
- **Notes from John** ([notes_from_john.md](notes_from_john.md)): Strategic alignment (customer-back company, growth, start with the customer); Waymaker opportunity (customer-driven strategy, attention to detail, consistent delivery, transformational "big ideas," close partnership); Aspiration (6–10% organic growth, investing in resources and customer expertise); Stakeholder value = providing the right solution and approach for Waymaker business partners. See **§ Notes from John (content implications)** below.
- **Inspiration (from Nol):** Harvest Group (structure, retailer credibility), Bluebird Group (polish, confidence, social proof), Alliance (simplicity, concise copy).
- **Cleanness reference:** [First_Website/index.html](First_Website/index.html) — CSS variables, clear sectioning, small-cap labels above headings, generous padding, fixed header, mobile overlay menu, no framework.

**Logo color theme (from WayMaker logo):** Primary navy `#2C3E6C`, accent gold/tan `#9B845C`, background white `#FFFFFF`. The draft uses `#24306f` and `#caa24f`; these should be updated to match the logo.

---

## 1. Design system and structure

- **Colors:** Define CSS custom properties from the logo: `--navy: #2C3E6C`, `--gold: #9B845C`, `--white: #FFFFFF`, plus `--text-secondary`, `--border`, `--bg-soft` derived from these (and optional `--gold-hover`).
- **Typography:** Choose one clean sans-serif for headings and one for body (or a single versatile family). First_Website uses Cormorant + Jost; for a B2B brokerage, something like a clean sans (e.g. DM Sans, Plus Jakarta Sans, or system stack) will feel professional and on-brand. Use a **kicker/label** pattern above section headings (small caps, letter-spacing, gold or navy) like First_Website's `.about-label` / `.portfolio-label`.
- **Layout:** Reuse the draft's section flow; apply First_Website-style consistency: a single `--max-width` container, consistent section padding (e.g. `padding: 5rem 0` / `7rem 0`), and optional `section-divider` lines where it helps.
- **Header:** Sticky/fixed header with logo (link to `#` or `/`), nav links (Services, Channels, Process, Contact), and a clear Contact/CTA button. Implement a **mobile menu**: hamburger that toggles a full-screen overlay (like First_Website) so the site stays clean on small screens.
- **Logo:** Use [WayMaker logo.png](WayMaker%20logo.png) in the header (and footer if desired). Ensure path works from the final site root (e.g. `WayMaker logo.png` or `assets/WayMaker logo.png`).

No assets (images, fonts beyond what you choose) should be taken from First_Website; only patterns and "cleanness" are borrowed.

---

## 2. Homepage content and sections


| Section               | Action                                                                                                                                                                                                                                                                                                                                     |
| --------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| **Hero**              | Replace "Alliance-inspired first mockup" eyebrow with a short, benefit-led label (e.g. "CPG brokerage for club retail"). Headline and lead should **immediately** state what Waymaker does (brokerage for CPG brands into Costco, Costco Pharmacy, PriceSmart) per Nol. Keep primary/secondary CTAs (e.g. Book intro call, View services). |
| **Stats strip**       | Keep the four items (3 channels, 1 partner, CPG focus, end-to-end); optionally tighten copy. Ensure contrast and readability on navy.                                                                                                                                                                                                      |
| **Services**          | Keep three pillars (Sell-In Strategy, Retail Readiness, Ongoing Support); remove the meta sentence about "first draft" and "Alliance." Copy should be concise and benefit-focused.                                                                                                                                                         |
| **Channels**          | Keep Costco, Costco Pharmacy, PriceSmart cards; align copy with Nol's positioning.                                                                                                                                                                                                                                                         |
| **Process**           | Keep 4 steps (Assess, Position, Present, Scale); optional small polish to wording.                                                                                                                                                                                                                                                         |
| **Credibility (new)** | Add a **Credibility** block (e.g. between Process and CTA, or after Hero). Options: short "Why Waymaker" bullets, retailer logos (if you have permission), a single testimonial or "trusted by" line, or a concise "experience / focus" statement. Avoid clutter; one clear block is enough to satisfy "brands trust you fast."            |
| **CTA**               | Replace placeholder CTA copy with a clear, action-oriented line (e.g. "Ready to see if your brand is club-channel ready?"). Keep a primary button; see Contact below.                                                                                                                                                                      |
| **Footer**            | Replace "Rough homepage mockup" with proper footer: e.g. "Waymaker Marketing Agency," optional small links (Contact, email), and copyright.                                                                                                                                                                                                |


Placeholder/insider references to remove or replace: "Alliance-inspired first mockup," "This first draft leans into…," "Rough homepage mockup," and any "first-pass"/"next we can" notes in the CTA.

---

## Notes from John (content implications)

John's notes ([notes_from_john.md](notes_from_john.md)) define Waymaker's strategic positioning. Use them to sharpen copy and future pages:

- **Strategic alignment:** Waymaker is a **customer-back company** focused on **growth**—start with the customer in everything. Where relevant, hero or credibility copy can echo "customer-back" and "growth" (e.g. "We start with your goals" or "Growth through the right channel").
- **Waymaker opportunity:** The team enables **customer-driven strategy** and brings the best of Waymaker to the customer; success comes from **attention to detail**, **consistent delivery**, and **close partnership**; the business is complex and competitive; **transformational big ideas** matter. Credibility or About can stress one partner, detail-oriented execution, and big-idea thinking.
- **Aspiration:** Belief in **6–10% organic growth** with a different strategy—investing in **resources**, **commercial capabilities**, and **customer expertise**. Optional for About or a "Why us" line (e.g. "Built for the growth you're aiming for").
- **Stakeholder value:** The greatest value is **providing the right solution and approach** for Waymaker business partners; themes of **growth** and **protecting the business**. CTA or credibility can reinforce "the right solution for your brand" or "the right approach for your growth."

No need to quote John verbatim; weave these themes into hero, credibility, CTA, and any future About or "Our approach" section so the site feels aligned with internal strategy.

---

## 3. Contact and lead form

- **Requirement (Nol):** Contact / lead form so the site is actually useful.
- **Options:**  
  - **A.** In-page form that submits to a form backend (e.g. Formspree, Netlify Forms, or your own endpoint) with fields such as: Name, Company/Brand, Email, Phone (optional), Message or "What are you looking for?". On submit, show a thank-you message or redirect.  
  - **B.** Keep a prominent "Start the conversation" / "Book an intro call" that links to `mailto:hello@waymakeragency.com` as a fallback, and add a simple form above or beside it that posts to the same backend.
- **Recommendation:** Implement a real form (Name, Email, Company, Message) and hook it to a service (e.g. Formspree with your domain/email). Keep a mailto link in the footer or contact section as backup. Form styling should match the design system (inputs, button using `--navy` / `--gold`).

---

## 4. Technical and deployment

- **Stack:** Single HTML file (or multiple if you add pages) with embedded CSS and minimal vanilla JS (e.g. mobile menu toggle, smooth scroll, optional form validation). No need for a framework unless you prefer one.
- **Assets:** Only WayMaker logo (and any future approved images). Store under something like `/assets/` or project root; reference consistently.
- **SEO and meta:** Title, meta description, and Open Graph tags (og:title, og:description, og:image, og:url) for the purchased domain. Favicon: use a cropped/squared version of the logo or the "W" mark if available.
- **Domain:** You have the domain; the plan assumes you will point it to whatever host you use (e.g. Netlify, Vercel, or simple static hosting). No asset copying from First_Website; only structure and cleanness.

---

## 5. Optional next-phase pages

The draft mentions a "fuller site" with About, Services, and intake form. For the **first launch**, the plan above is homepage + credibility + contact/lead form. If you want to include these in the initial build:

- **About:** Short story (who Waymaker is, why club retail, Nol/team if desired), styled with the same section/label pattern.
- **Services:** Dedicated page expanding the three service pillars and/or channel-specific offerings; nav link "Services" can go here instead of `#services`.
- **Intake form:** Could be the same as the contact/lead form, or a multi-step intake on a separate page; same form backend.

---

## 6. File and task outline

- **Primary deliverable:** One polished `index.html` (or `waymaker_homepage.html` renamed to `index.html`) containing:
  - Design system (CSS variables from logo colors; typography; section/label/button patterns).
  - Header with logo and nav; mobile menu (JS).
  - Hero (revised copy), stats strip, Services, Channels, Process, **Credibility**, CTA, **Contact/lead form**, footer.
  - Placeholder copy removed; Nol's requirements met.
- **Assets:** Use existing [WayMaker logo.png](WayMaker%20logo.png); optionally add favicon.
- **Form:** Add form markup and wire to Formspree (or chosen backend); no backend code in this repo unless you add a small server later.

If you confirm scope (homepage-only vs. About + Services pages) and form backend preference (Formspree vs. other), the implementation can follow this plan exactly.
