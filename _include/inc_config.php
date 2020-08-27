<?php
const MODE_PROD=false;
session_start();
const DB_SERVER = "localhost";
const DB_NAME = "tp1";
const DB_USER = "gabor";
const DB_PWD="gabor";
$link = new PDO("mysql:host=".DB_SERVER.";dbname=".DB_NAME, DB_USER,DB_PWD);
$link->exec("SET CHARACTER SET UTF8");
$nomApplication = "TP1";


require "inc_fonction.php";
?>