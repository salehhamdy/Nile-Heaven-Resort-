# Hotel Booking Portal (PHP / MySQL + HTML & CSS)

A responsive, component‑based hotel reservation website built with **PHP 8**, **MySQL**, and plain **HTML / CSS (+ JavaScript)**.  Guests can browse rooms, unlock special offers, book stays, subscribe to the newsletter, and contact the hotel, while registered users can manage their accounts and reservations.

---

## 📂 Project Structure

| File / Dir | Role |
|------------|------|
| `connection.php` | Central **PDO**/MySQLi connection helper (imported by all server-side scripts). |
| `navbar.php` | Top navigation bar (mobile-first, hamburger toggle). |
| `footer.php` | Shared footer with socials, newsletter form & mini-CTA. |
| `main.php` | **Home page** — hero carousel, about, featured rooms, amenities, reviews. |
| `specialoffers.php` | Promotions page displaying current deals & coupon codes. |
| `Reserve.php` | Core reservation flow — availability check ➜ booking confirmation & DB insert. |
| `mybooking.php` | User dashboard listing their active / past bookings with cancel option. |
| `signinsignup.php` | Combined login & registration modal / page (uses sessions & password hashing). |
| `forgotpassword.php` | Password-reset flow (email token, new password form). |
| `Contact.php` | Contact-us form (stores messages + optional email to admin). |
| `sendmsg.php` | AJAX endpoint hit by `Contact.php` for async message sending. |
| `newsletter.php` | AJAX endpoint to add an email to `subscribers`. |
| **CSS/** | Style sheets: `bootstrap.min.css`, `bootstrap5.css`, `mainstyle.css`, `contactstyle.css`, `forgotstyle.css`, `mybookingstyle.css`, `sliderstyle.css`, `specialoffersstyle.css`. |
| **JS/** | Custom scripts `script.js`, `slider.js`, `main.js` plus libraries: `bootstrap.min.js`, `bootstrap5.js`, `popper.min.js`, `jquery.js`, `jquery-3.3.1.min.js`, `jquery.validate.min.js`, `owl.carousel.min.js`. |
| `assets/` | Images, icons, fonts. |
| `schema.sql` | *(Optional)* DDL for `users`, `rooms`, `bookings`, `messages`, `subscribers`. |

> **Tip:** Consider grouping third‑party CSS/JS under `vendor/` and serving production bundles through a CDN or build pipeline for better caching.

---

## 🖥️ Key Features

- **Responsive UI** — handcrafted CSS grid & flex layouts adapt gracefully.
- **Room catalog & star ratings** with live‑filtered availability.
- **Dynamic pricing / Special offers** displayed on `specialoffers.php` and auto‑applied during checkout.
- **Secure reservation pipeline** (`Reserve.php`) using prepared SQL & session tokens.
- **All‑in‑one Auth** (`signinsignup.php`) with hashed passwords & remember‑me cookie.
- **User account area** (`mybooking.php`) to view or cancel bookings.
- **Newsletter & contact** forms powered by lightweight AJAX endpoints.
- **Robust password recovery** with expiring reset tokens (`forgotpassword.php`).

---

## 🚀 Quick Start

### 1. Clone & Configure

```bash
git clone https://github.com/your-handle/hotel-booking.git
cd hotel-booking
cp connection.sample.php connection.php   # update DB creds
```

Edit `connection.php`:
```php
$dsn = 'mysql:host=localhost;dbname=hotel_db;charset=utf8mb4';
$user = 'root';
$pass = 'yourPassword';
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
```

### 2. Create Database

```bash
mysql -u root -p < schema.sql   # or import via phpMyAdmin
```

### 3. Serve Locally

```bash
php -S localhost:8000
# visit http://localhost:8000/main.php
```

*(Or drop into XAMPP / WAMP’s `htdocs`.)*

---

## 🛡️ Security Checklist

- ✔️ **Prepared statements** everywhere (`PDO::prepare`).
- 🔒 **Password hashing** with `password_hash()` / `password_verify()`.
- 🕑 **CSRF tokens** — implemented in all forms (see `csrf_token()` helper).
- 🚫 **XSS** mitigated via `htmlspecialchars` and CSP headers.
- 🐘 **SESSION hardening** — `session_regenerate_id(true)` on login, `SameSite=Lax` cookies.

---

## 📊 Database Schema (summary)

```text
users(id, name, email UNIQUE, phone, password_hash, created_at)
rooms(id, name, description, price_per_night, img_path, rating)
bookings(id, user_id FK, room_id FK, check_in, check_out, guests, status, offer_code)
messages(id, name, email, subject, body, created_at)
subscribers(id, email UNIQUE, subscribed_at)
password_resets(id, user_id FK, token, expires_at)
```

---

## 🛠️ Customisation Ideas

| Enhancement | Hint |
|-------------|------|
| **Admin dashboard** | CRUD rooms/offers, approve/cancel bookings, reply to messages. |
| **Payment gateway** | Hook into Stripe or PayPal for deposits. |
| **Live chat** | Integrate Socket.io or Pusher for instant guest support. |
| **Image optimisation** | Serve WebP, use native lazy-loading & srcset. |
| **Localization (i18n)** | Wrap UI strings in a translation helper & JSON files. |

---

## 📦 Deploying

1. Provision LAMP/VPS with PHP 8.2 + MySQL 8.
2. Upload code via Git or SFTP.
3. Import `schema.sql`, update `connection.php` creds.
4. Configure Apache/Nginx vhost to point to project root.
5. Set correct file permissions (`chmod 600 connection.php`).

---

## 📝 License

Released under the **MIT License** — see `LICENSE` for details.
