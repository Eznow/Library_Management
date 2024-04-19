<?php
include 'db_connect.php';

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];

$sql = "UPDATE borrowers SET name='$name', email='$email' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  echo "Cập nhật thông tin người mượn thành công";
} else {
  echo "Lỗi: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
