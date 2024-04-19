<?php
include 'db_connect.php';

$name = $_POST['name'];
$email = $_POST['email'];

$sql = "INSERT INTO borrowers (name, email) VALUES ('$name', '$email')";

if ($conn->query($sql) === TRUE) {
  echo "Thêm người mượn thành công";
} else {
  echo "Lỗi: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
