# Autoshine.lk - Auto Service and Maintenance System

A professional web application and booking system developed for Autoshine Pvt Ltd, an automotive service and detailing center located in Delkanda, Nugegoda, Sri Lanka. 

This repository contains the complete frontend and modular PHP backend source code.

---

## Features

* **Responsive Design:** A premium user interface optimized for mobile, tablet, and desktop viewports.
* **Appointment Booking & Contact:** Asynchronous, AJAX-driven forms (`ajax-schedule-appointment.php` and `ajax-submit-contact.php`) for seamless booking and inquiries.
* **SMTP Email Notifications:** Secure automated transactional email delivery using PHPMailer with modular, professional HTML templates.
* **Pretty URLs:** Custom routing configured via Apache `.htaccess` that maps clean paths (e.g., `/service/brake-repair`) to internal scripts.
* **Security & Environment Config:** Request filtering and input sanitization combined with strict folder protection rules and environment-isolated credentials using `.env`.
* **Browser Caching:** Performance optimization enabled through automated assets caching rules.

---

## Technology Stack

* **Core Backend:** PHP (8.0+)
* **Dependencies:** Composer (PHPMailer ^7.0)
* **Frontend:** HTML5, Vanilla CSS3, Javascript (Slick Slider)
* **Web Server:** Apache HTTP Server

---

## Directory Structure

```text
autoshine.lk/
├── assets/                  # CSS stylesheets, Javascript files, and optimized images
├── includes/                # Shared templates (header, navbar, footer, security, mail-config)
├── services/                # Individual service components (e.g., service-brake-repair.php)
├── .env.example             # Configuration file template
├── .htaccess                # Apache routing, security filters, and cache controls
├── 404.php                  # Custom error page
├── index.php                # Homepage
└── composer.json            # Composer package dependencies
```

---

## Local Development Setup

### 1. Prerequisites
* Apache Web Server with `mod_rewrite` and `mod_expires` modules enabled.
* PHP 8.0 or higher.
* Composer package manager.

### 2. Installation Steps

1. Clone or download the repository to your local server directory (e.g., `htdocs` or `/var/www/html`).
2. Navigate to the project root and install dependencies:
   ```bash
   composer install
   ```
3. Copy `.env.example` to create your own configuration file:
   ```bash
   cp .env.example .env
   ```
4. Edit the `.env` file with your active SMTP mail credentials:
   ```env
   SMTP_HOST=smtp.gmail.com
   SMTP_USER=your-email@gmail.com
   SMTP_PASS=your-app-password
   SMTP_PORT=587
   SMTP_FROM_EMAIL=your-email@gmail.com
   SMTP_FROM_NAME="Autoshine"
   RECIPIENT_EMAIL=receiver@gmail.com
   APP_ENV=development
   ```
5. Ensure your Apache virtual host has directory overrides enabled:
   ```apache
   AllowOverride All
   ```
6. Access the site via your web browser:
   ```text
   http://localhost/autoshine.lk
   ```

---

## License

Proprietary and confidential. All rights reserved.
