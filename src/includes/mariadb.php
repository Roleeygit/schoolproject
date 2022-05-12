<?php
include_once('config.php');



function connectDB() {
  global $db;
  $con = new mysqli($db['host'],$db['user'],$db['pass'],$db['name']);
  if($con->connect_error) {
    die("Hiba!")
  };

  return $con
}