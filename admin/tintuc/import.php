<?php 
	$this->layoutPath = "Layout.php";
 ?>
<?php
// Kết nối cơ sở dữ liệu
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "web";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Xử lý dữ liệu form khi gửi
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $content = $_POST['content'];
    $hot = isset($_POST['hot']) ? 1 : 0;
    $createdby = 1; // Thay thế bằng ID của admin từ session hoặc biến khác

    // Xử lý upload ảnh
    $photo = "";
    if (isset($_FILES['photo']) && $_FILES['photo']['error'] == UPLOAD_ERR_OK) {
        $upload_dir = 'uploads/';
        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0777, true);
        }
        $tmp_name = $_FILES['photo']['tmp_name'];
        $photo = basename($_FILES['photo']['name']);
        move_uploaded_file($tmp_name, $upload_dir . $photo);
    }

    $sql = "INSERT INTO news (name, description, content, hot, photo, createdby) 
            VALUES ('$name', '$description', '$content', $hot, '$photo', $createdby)";

    if ($conn->query($sql) === TRUE) {
        echo "Tin tức đã được lưu thành công!";
    } else {
        echo "Lỗi: " . $conn->error;
    }

    $conn->close();
}
?>

    <h1>Tin tức </h1>
    <form action="write_news.php" method="post" enctype="multipart/form-data">
        <label for="name">Tên tin tức:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="description">Mô tả:</label>
        <textarea id="description" name="description" required></textarea><br><br>

        <label for="content">Nội dung:</label>
        <textarea id="content" name="content" required></textarea><br><br>

        <label for="hot">Nổi bật:</label>
        <input type="checkbox" id="hot" name="hot"><br><br>
        <label for="hot">không nổi bật :</label>
        <input type="checkbox" id="hot" name="hot"><br><br>


        <label for="photo">Ảnh đại diện:</label>
        <input type="file" id="photo" name="photo" accept="image/*"><br><br>

        <input type="f" value="Lưu tin tức">
    </form>
<style>
    body {
    font-family: Arial, sans-serif;
    margin: 20px;
}

h1 {
    color: #333;
}

label {
    display: block;
    margin-top: 10px;
}

input[type="text"], textarea {
    width: 100%;
    padding: 8px;
    margin-top: 5px;
}

input[type="file"] {
    margin-top: 5px;
}

input[type="submit"] {
    margin-top: 10px;
    padding: 10px 15px;
    background-color: #007bff;
    color: white;
    border: none;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #0056b3;
}

</style>