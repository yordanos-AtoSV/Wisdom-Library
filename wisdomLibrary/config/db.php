<?php
session_start();

$con = mysqli_connect("localhost", "root", "", "librarymanagement");
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
?>