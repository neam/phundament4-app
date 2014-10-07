<?php
/**
 * The main application config
 */

namespace neam\bootstrap;

// ==== Yii core config ====

Config::expect("YII_DEBUG", $default = false, $required = false);
Config::expect("YII_ENV", $default = 'paas', $required = false);

// ==== Identity-related config ====

Config::expect("APP_NAME", $default = '[paas] Phundament 4', $required = false);
Config::expect("SUPPORT_EMAIL", $default = 'support+paas@h17n.de', $required = false);

// ==== Admin user details ====

Config::expect("ADMIN_EMAIL", $default = 'admin+paas@h17n.de', $required = false);
Config::expect("ADMIN_DEFAULT_PASSWORD", $default = 'admin123', $required = false);

// ==== Infrastructure-related config ====

// Activate support for special configuration directives since we need it below
$_ENV["EXPAND_CONFIG_URLS"] = "1";

// Support setting main db constants based on DATABASE_URL environment variable
Config::expect("DATABASE_URL", $default = null, $required = false);

// Database table prefix
Config::expect("DATABASE_TABLE_PREFIX", $default = null, $required = false);

// Test database configuration is only used when running tests, thus is only required then
Config::expect("TEST_DB_SCHEME", $default = null, $required = Config::read("YII_ENV") == 'test');
Config::expect("TEST_DB_HOST", $default = null, $required = Config::read("YII_ENV") == 'test');
Config::expect("TEST_DB_PORT", $default = null, $required = Config::read("YII_ENV") == 'test');
Config::expect("TEST_DB_USER", $default = null, $required = Config::read("YII_ENV") == 'test');
Config::expect("TEST_DB_PASSWORD", $default = null, $required = Config::read("YII_ENV") == 'test');
Config::expect("TEST_DB_NAME", $default = null, $required = Config::read("YII_ENV") == 'test');
Config::expect("TEST_DB_TABLE_PREFIX", $default = null, $required = Config::read("YII_ENV") == 'test');

// Require setting smtp constants based on SMTP_URL environment variable
Config::expect("SMTP_URL", $default = null, $required = true); // smtp://username:password@host:587?encryption=tls
