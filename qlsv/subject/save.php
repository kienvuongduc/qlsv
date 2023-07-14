<?php 
    require "../config.php";
    require "../connect_DB.php";
    $name = $_POST["name"];
    $number_of_credit = $_POST["number_of_credit"];

    $sql = "INSERT INTO subject (name, number_of_credit)
    VALUES ('$name', $number_of_credit)";
    session_start();

if ($conn->query($sql) === TRUE) {
    $_SESSION["success"] = "Đã tạo môn học thành công";
} else {
    $_SESSION["error"] = "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("location: list.php");

?>