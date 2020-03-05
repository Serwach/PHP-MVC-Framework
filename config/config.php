<?php

define('DEBUG', true);

define('DB_TYPE', 'mysql');	// Database type
define('DB_HOST', '127.0.0.1');	// Database host *** use IP address to avoid DNS lookup
define('DB_USER', 'root');	// Database user
define('DB_PASSWORD', '');	// Database password
define('DB_NAME', 'test');	// Database name

define('SITE_TITLE', 'PHP MVC Framework');	// This will be used if no site title is set
define('MENU_BRAND', 'PWork');	// This is the  brand text in the menu

define('PROOT', 'http://localhost/mvc.local/');	// Set this to '/' for a live server

define('DEFAULT_CONTROLLER', 'Home');	// If there isn't set controller
define('DEFAULT_LAYOUT', 'default');	// If no layout is set in the controller