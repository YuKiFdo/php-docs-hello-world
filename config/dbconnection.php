<?php

define('DB_SERVER', "your_server_name.database.windows.net"); // Replace with your server name
define('DB_USERNAME', "your_username"); // Replace with your username
define('DB_PASSWORD', "your_password"); // Replace with your password
define('DB_DATABASE', "dbsakura_mobile"); // Replace with your database name

// Connection info array
$connectionInfo = array("Database" => DB_DATABASE, "UID" => DB_USERNAME, "PWD" => DB_PASSWORD);

// Establish the connection
$conn = sqlsrv_connect(DB_SERVER, $connectionInfo);
if(!$conn){
    die("Connection Failed: ". mysqli_connect_error());
}

?>