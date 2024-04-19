<?php
include 'db_connect.php';

$sql = "SELECT * FROM books";
$result = $conn->query($sql);

$books = array();
while($row = $result->fetch_assoc()) {
  $books[] = $row;
}

echo json_encode($books);

$conn->close();
?>
