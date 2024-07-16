<?php

define('HOSTNAME', 'localhost');
define('USERNAME', 'root');
define('PASSWORD', '');
define('DATABASE', 'coaching-center');

// Create connection
$db_connection = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);
// Check connection
if (!$db_connection) {
    die("Connection failed: " . mysqli_connect_error());
}

else{
    echo "DB connected successfully";
}

