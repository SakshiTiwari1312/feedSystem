<?php

// define database parameters as an array
$db = array(
    'db_host' => 'localhost',  // Database host (usually 'localhost')
    'db_user' => 'root',       // Database username (default is 'root' in XAMPP)
    'db_pass' => '',           // Database password (empty by default in XAMPP)
    'db_name' => 'ed01-cms'    // The name of your database
);

// loop through the array to make them into constants
foreach ($db as $key => $value) {
    define(strtoupper($key), $value);
}

// connect to database
$con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check if the connection is successful
if (mysqli_connect_errno()) {
    die("Connection failed: " . mysqli_connect_error());
}

// Set character encoding for the connection to avoid issues with special characters
mysqli_set_charset($con, 'utf8mb4');

// define other constants
define('SITENAME', 'FeedHub');
define('SITESUBTITLE', '&nbsp;&nbsp;&nbsp; Stream, Discover, Connect.');
define('POSTSPERPAGE', 10);
define('AUTHOR', 'Sakshi');
define('TIMEOUT', 120);
define('HASHCOST', 12);
define('TZ', 'America/Los_Angeles');

?>
