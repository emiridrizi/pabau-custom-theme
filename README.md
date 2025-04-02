# Pabau Custom Theme
A custom WordPress theme for the Pabau Junior Web Developer task.

## Overview
This project is a custom WordPress theme built for an imaginary company. It includes:
- A homepage (`index.php`) with custom styling.
- A lead form page (`page-lead.php`) that submits leads to Pabau’s API via AJAX.
- Custom styling (`style.css`) for responsiveness and a clean design.
- jQuery and AJAX for form submission (`js/custom.js`).
- A proxy script (`proxy.php`) to bypass CORS restrictions.

## Setup
1. Install WordPress (e.g., via LocalWP) with PHP 7.4+ and WordPress 6.0+.
2. Copy this theme to `wp-content/themes/pabau-custom-theme`.
3. Activate the theme in Appearance > Themes.
4. Create a "Home" page and set it as the front page.
5. Create a "Lead Form" page and assign the "Lead Form" template.
6. Test the form submission at the "Lead Form" page.
7. **Note**: The site URL in the database is `http://emir-pabau-task.local`. After importing the database, update the `siteurl` and `home` options in the `wp_options` table to match your local environment’s URL.

## Requirements
- PHP 7.4+
- WordPress 6.0+
- Internet connection for API calls

## API Integration
- The lead form submits to `https://uk2.pabau.me/OAuth2/leads/lead-curl.php` using the provided API key.
- A proxy script (`proxy.php`) is used to bypass CORS restrictions, as local testing was initially blocked (missing `Access-Control-Allow-Origin` header on the API server).
- The API returns a plain text response (e.g., `Lead id: 3300568\nTime Taken: 0.025285959243774`), which is parsed in `custom.js` to display the lead ID in a modal.

## Notes
- Successful submissions display a modal with the lead ID and redirect to the homepage after 10 seconds.
- The site is fully responsive, with custom styling in `style.css`.