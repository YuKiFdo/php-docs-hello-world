<?php
try {
    $conn = new PDO("sqlsrv:server = tcp:sakurampos.database.windows.net,1433; Database = sakurampos", "sakurampos", "{your_password_here}");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "sakurampos", "pwd" => "{your_password_here}", "Database" => "sakurampos", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:sakurampos.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}
