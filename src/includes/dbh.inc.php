<?php

$dbServername = "cldfinals_db_1";
$dbUsername = "admin";
$dbPassword = "FedUlQ8Hbl5KGxeF";
$dbName = "mboardlogin";

try{
$conn = new PDO('mysql:host=finalsdb;dbname=mboardlogin', 'admin', 'FedUlQ8Hbl5KGxeF');

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
