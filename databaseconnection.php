<?php
$dsn = 'mysql:dbname = tuniverse;host=127.0.0.1';
$user = 'root';
$password = '';
$dbh = new PDO($dsn, $user, $password);

try {
$stmt = $dbh->query("SELECT * FROM content WHERE id = 1");
}
catch (PDOException $exp)
{
    echo 'error21';
}