<?php
$db = 'career';
$host = 'localhost';
$username = 'kevin';
$password = '35852744';

$connection = new mysqli($host, $username, $password, $db);

if ($connection->connect_error) {
    die('Connection to database failed!');
}
?>