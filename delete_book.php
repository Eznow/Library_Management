<?php
include 'db_connect.php';

$id = $_POST['id'];

$sql = "DELETE FROM books WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  echo "Xóa sách thành công";
} else {
  echo "Lỗi: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
