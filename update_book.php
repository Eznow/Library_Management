<?php
include 'db_connect.php';

$id = $_POST['id'];
$title = $_POST['title'];
$author = $_POST['author'];
$publication_year = $_POST['publication_year'];

$sql = "UPDATE books SET title='$title', author='$author', publication_year='$publication_year' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  echo "Cập nhật sách thành công";
} else {
  echo "Lỗi: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
