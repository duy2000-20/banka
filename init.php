<?php
session_start();
require_once './vendor/autoload.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$db = new PDO('mysql:host=localhost;dbname=testdb;charset=utf8','root','');

require_once 'functions.php';
$currentUser = getCurrentUser();
$currentPost = getCurrenPost();