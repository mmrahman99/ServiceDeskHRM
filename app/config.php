<?php
ini_set('error_log', 'data/icehrm.log');

define('APP_NAME', 'DatacomHRM');
define('FB_URL', 'DatacomHRM');
define('TWITTER_URL', 'DatacomHRM');

define('CLIENT_NAME', 'app');
define('APP_BASE_PATH', 'C:\xampp\htdocs\ServiceDeskHRM/');
define('CLIENT_BASE_PATH', 'C:\xampp\htdocs\ServiceDeskHRM\app/');
define('BASE_URL','http://localhost/servicedeskhrm/');
define('CLIENT_BASE_URL','http://localhost/servicedeskhrm/app/');

define('APP_DB', 'icehrmsandbox');
define('APP_USERNAME', 'icehrm_user');
define('APP_PASSWORD', 'icehrm_user');
define('APP_HOST', 'localhost');
define('APP_CON_STR', 'mysqli://'.APP_USERNAME.':'.APP_PASSWORD.'@'.APP_HOST.'/'.APP_DB);

//file upload
define('FILE_TYPES', 'jpg,png,jpeg');
define('MAX_FILE_SIZE_KB', 10 * 1024);
