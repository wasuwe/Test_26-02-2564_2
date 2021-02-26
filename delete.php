<?php
include "connect.php";

$id = $_GET['id'];


$sql = "DELETE FROM record WHERE id = $id";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";  
  header( "location: index.php" );
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>