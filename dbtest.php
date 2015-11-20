<?php

$db_host = 'p2-db1.dev';
$db_user = 'drupal_user'
$db_password = 'drupal_user'
$db_name = 'drupal_db';
$db = @mysqli_connect($db_host, $db_user, $db_password, $db_name) OR die ('Could not connect to MySQL: ' . mysqli_connect_error());
$sql = "SHOW DATABASES";
$result = mysqli_query($db, $sql);
while($row = mysqli_fetch_assoc($result)) {
  print_r($row);
}


