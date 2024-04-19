<?php
include 'db_connect.php';

$borrower_id = $_POST['borrower_id'];
$book_id = $_POST['book_id'];

$sql = "UPDATE borrowers SET borrowed_book_id=$book_id WHERE id=$borrower_id";

if ($conn->query($sql) === TRUE) {
  echo "Cập nhật sách mượn thành công";
} else {
  echo "Lỗi: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
