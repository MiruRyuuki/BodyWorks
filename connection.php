<?php
$con=mysqli_connect("localhost","root","","db_bodywork");

if (mysqli_connect_errno()) {
  echo "Connection failed: " . mysqli_connect_error();
  exit;
}