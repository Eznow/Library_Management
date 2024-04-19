<?php
include 'db_connect.php';

$id = $_POST['id'];

$sql = "DELETE FROM borrowers WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  echo "Xóa người mượn thành công";
} else {
  echo "Lỗi: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
