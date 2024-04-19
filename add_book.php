<?php
include 'db_connect.php';

$title = $_POST['title'];
$author = $_POST['author'];
$publication_year = $_POST['publication_year'];

$sql = "INSERT INTO books (title, author, publication_year) VALUES ('$title', '$author', '$publication_year')";

if ($conn->query($sql) === TRUE) {
  echo "Thêm sách thành công";
} else {
  echo "Lỗi: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
