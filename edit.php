<?php
include "connect.php";

$id = $_GET['id'];
$typeid = $_GET['typeid'];

$name = $_GET['name'];
$money = $_GET['money'];
$payday = $_GET['payday'];   
$editday = date('Y-m-j');  


$sql = "UPDATE record SET name = '$name', money = '$money',payday = '$payday', editday = '$editday' WHERE id = $id ";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
  header( "location: index.php" );
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>