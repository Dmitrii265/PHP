<?php

$dbhost = "localhost";
$dbuser = "dmitrii265_auth";
$dbpass = "F&7mWhmo";
$dbname = "dmitrii265_auth";
$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
$mysqli->set_charset("utf-8");

if ($mysqli->connect_error) {
  die("Не удалось подключиться к БД".$mysqli->connect_error);
}
