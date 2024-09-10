<?php
require_once ('vendor/autoload.php'); // Nếu import.php nằm ở thư mục gốc project/

use PhpOffice\PhpSpreadsheet\IOFactory;

// Database connection
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "web"; // Replace with your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST["import"])) {
    // Check if file was uploaded
    if ($_FILES["file"]["error"] == UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES["file"]["tmp_name"];

        // load the excel file 
        $spreadsheet =IOFactory::load($fileTmpPath);
        $worksheet $spreadsheet->getActiveSheet();
        $data = $worksheet->toArray();

        // Prepare the SQL statement
    
        $stmt = $conn->prepare("INSERT INTO sanpham (SoSerial, MaHang, TenHang, NgayXuat, ThoiHanBH) VALUES (?, ?, ?, ?, ?)");
        if ($stmt === false){
            die("Error preparing statement: " . $conn->error);
        }

        // Loop through the rows (skipping the header row)
        foreach ($data as $key => $row) {
            if ($key === 0) { // Assuming the first row is the header
                continue;
            }

            $so_serial = $conn->real_escape_string($row[0]);
            $mahang = $conn->real_escape_string($row[1]);
            $tenhang = $conn->real_escape_string($row[2]);
            $ngayxuat = $conn->real_escape_string($row[3]);
            $thoihanbh = $conn->real_escape_string($row[4]);
            // upload code 
            $required_columns = [
                'SoSerial', 'MaHang', 'TenHang','NgayXuat', 'ThoiHanBH'
            ];
            
            // Chỉ số cột theo thứ tự trong cơ sở dữ liệu
            $column_indices = [
                'SoSerial' => 0,
                'MaHang' => 1,
                'TenHang' => 2,
                'NgayXuat' => 3,
                'ThoiHanBH' => 4,
                
            ];

            // Bind parameters and execute the statement
            $stmt->bind_param("sssss", $so_serial, $mahang, $tenhang, $ngayxuat, $thoihanbh);
            if (!$stmt->execute()) {
                echo "Error: " . $stmt->error . "<br>";
            }
        }

        $stmt->close();
        $conn->close();

        echo "<script>alert('Cập nhập dữ liệu thành công!'); window.location.href='index.php';</script>";
    } else {
        echo "Error uploading file.";
    }
}
?>
