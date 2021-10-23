<?php
//start a new session
session_start();

$page_title = "Add Cloth";

require_once 'includes/header_a.php';
require_once 'includes/mydatabase.php';

$title = $_GET['cloth_name'];
$price = $_GET['cloth_price'];
$bio = $_GET['cloth_bio'];
$rating = $_GET['cloth_rating'];
$image =  $_GET['cloth_image'];

//define sql statement
$query_str = "INSERT INTO $clothes VALUES (NULL, '$title', '$price', '$rating', '$bio', '$image')";

//execute the query
$result = @$conn->query($query_str);

//handle error
if(!$result) {
  $errno = $conn->errno;
  $errmsg = $conn->error;
  echo "Insertion failed with: ($errno) $errmsg<br/>\n";
  $conn->close();
  exit;
}


header("Location: clothes.php");
