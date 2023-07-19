<?php 
    require "../config.php";
    require "../connect_DB.php";
    $name = $_POST["name"];
    $birthday = $_POST["birthday"];
    $gender = $_POST["gender"];


    $sql = "INSERT INTO student (name, birthday, gender)
    VALUES ('$name', '$birthday', $gender)";
    session_start();

if ($conn->query($sql) === TRUE) {
    $_SESSION["success"] = "Đã tạo sinh viên thành công";
} else {
    $_SESSION["error"] = "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("location: list.php");

?>