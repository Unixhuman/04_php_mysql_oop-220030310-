<?php
$HOST = "localhost";
$PORT = 3306;
$DB = "db_php_form";
$USER = "root";
$PASSWORD = "";

$connectionStr = "mysql:host=$HOST;dbname=$DB";

try
{
    $pdo = new PDO($connectionStr, $USER, $PASSWORD);
    echo "Connection established.";
}
catch (PDOException $e)
{
    echo "Connection failed." . $e->getMessage();
}