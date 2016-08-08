<?php
$dbhostname = '127.0.0.1';
$dbusername = 'BookTrader';
$dbpassword = 'abc123';
$databaseName = 'booktrade';
$charset = 'utf8';

$dsn = "mysql:host=$dbhostname;dbname=$databaseName;charset=$charset";

$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC    
];
$pdo = new PDO($dsn, $dbusername, $dbpassword, $opt);