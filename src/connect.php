<?php
$host = 'db';
$db = 'devops_db';
$user = 'admin';
$pass = 'admin';

$link = mysqli_connect($host, $user, $pass, $db);

if (!$link) {
  echo mysqli_connect_error($link);
  die();
}