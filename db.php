<?php
session_start();
$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'usersystem';

$connect = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);
