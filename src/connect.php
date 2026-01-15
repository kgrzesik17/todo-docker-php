<?php
$host = 'db';
$db = 'devops_db';
$user = 'admin';
$pass = 'admin';

$link = mysqli_connect($host, $db, $user, $pass);

if (!$link) {
  echo mysqli_connect_error($link);
}