<?php 
// Create connection
$servername = "localhost";
$username= "root";
$password = "";
$dbname = "study_k38";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
mysqli_set_charset($conn,"utf8");
echo "Kết nối thành công";

// * là lấy tất cả các cột từ bảng student 
//không có điều gì khác thì mặc định là lấy tất cả các dòng
// $sql = "SELECT * FROM student WHERE id BETWEEN 1 AND 4 AND firstname='Khùng'";
// $sql = "SELECT * FROM student ORDER BY firstname DESC";
// $itemPerPage = 3;
// $page = 2;
// $index = ($page - 1) * $itemPerPage;
// $sql = "SELECT * FROM student LIMIT $index, $itemPerPage";
// $sql = "SELECT * FROM student LIMIT 6, 3";//index, number
// $search = "h";
// $sql = "SELECT * FROM student WHERE firstname LIKE '_$search%'";//firstname = '$search'

$sql = "SELECT employee.*, department.name AS dept_name FROM employee JOIN department ON employee.dept_id = department.dept_id";
//query = thực thi
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    // false: false, 0, "", null
    echo 7;
    while($row = $result->fetch_assoc()) {
       var_dump($row);
    }
} else {
    echo "0 results";
}

$conn->close();
?>