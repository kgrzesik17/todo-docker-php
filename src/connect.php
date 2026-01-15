<?php
$host = 'db';
$db = 'devops_db';
$user = 'admin';
$pass = 'admin';

$link = mysqli_connect($host, $user, $pass, $db);
$test = 'abc';

if (!$link) {
  echo mysqli_connect_error();
  die();
}