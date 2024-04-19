<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý Thư Viện</title>
    <!-- Nhúng Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="text-center mt-5">Quản Lý Thư Viện</h1>
        <div class="row mt-5">
            <div class="col-md-6">
                <h3>Sách</h3>
                <!-- Bảng sách -->
                <table class="table table-striped" id="books-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tiêu đề</th>
                            <th>Tác giả</th>
                            <th>Năm xuất bản</th>
                            <th>Có sẵn</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Dữ liệu sách sẽ được thêm vào đây bằng JavaScript -->
                    </tbody>
                </table>
            </div>
            <div class="col-md-6">
                <h3>Người mượn</h3>
                <!-- Bảng người mượn -->
                <table class="table table-striped" id="borrowers-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên</th>
                            <th>Email</th>
                            <th>ID sách mượn</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Dữ liệu người mượn sẽ được thêm vào đây bằng JavaScript -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Nhúng jQuery và Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
