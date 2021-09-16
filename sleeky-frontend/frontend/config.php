<?php
// CONFIG - These control the look and details on your site. Consult documentation for more details.

// GENERAL
$domains = explode('.', $_SERVER['SERVER_NAME'] ?? 'u.example.com');
define('host', implode('.', array_slice($domains, 1)));


// Page title for your site
define('title', 'URL Shortener | ' . host);

// The short title of your site, used in the footer and in some sub pages
define('shortTitle', host);

// A description of your site, shown on the homepage.
define('description', '');

// The favicon for your site
define('favicon', '/frontend/assets/img/favicon.ico');

// Logo for your site, displayed on home page
define('logo', '/frontend/assets/img/logo-black.png');

// Enable reCAPTCHA V3
// It is highly recommended you use reCAPTCHA V3. It will stop spam. You can get a site and secret key from here: https://www.google.com/recaptcha/admin/create
define("enableRecaptcha", false);

// reCAPTCHA V3 Site Key
define("recaptchaV3SiteKey", 'YOUR_SITE_KEY_HERE');

// reCAPTCHA V3 Secret Key
define("recaptchaV3SecretKey", 'YOUR_SECRET_KEY_HERE');

// Enables the custom URL field
// true or false
define('enableCustomURL', true);

// Optional
// Set a primary colour to be used. Default: #007bff
// Here are some other colours you could try:
// #f44336: red, #9c27b0: purple, #00bcd4: teal, #ff5722: orange
define('colour', '#5c27b0');

// Optional
// Set a background image to be used.
// default: unsplash.com random daily photo of the day
// More possibilities of photo embedding from unsplash could be found at: https://source.unsplash.com
// define('backgroundImage', 'https://source.unsplash.com/daily');

// FOOTER

// These are the links in the footer. Add a new link for each new link.
// The array follows a title link structure:
// "TITLE" => "LINK",
$footerLinks = [
    "Sleeky"   =>  "https://sleeky.flynntes.com/",
    "Yourls"   =>  "https://yourls.org/",
    "Contact" =>  "https://" . host,
    "Admin"   =>  "/admin"
];
