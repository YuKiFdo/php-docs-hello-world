<?php

define('DB_SERVER',"sakurampos.mysql.database.azure.com");
define('DB_USERNAME',"sakurampos");
define('DB_PASSWORD',"Yasas1@22");
define('DB_DATABASE',"dbsakura_mobile");
// ssl require
define('MYSQLI_CLIENT_SSL', MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT);

$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE, MYSQLI_CLIENT_SSL);

if(!$conn){
    die("Connection Failed: ". mysqli_connect_error());
}

?>