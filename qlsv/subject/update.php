<?php 
    require "../config.php";
    require "../connect_DB.php";
    $id = $_POST["id"];
    $name = $_POST["name"];
    $number_of_credit = $_POST["number_of_credit"];

    $sql = "UPDATE subject SET name ='$name', number_of_credit = $number_of_credit WHERE id=$id";
    session_start();

if ($conn->query($sql) === TRUE) {
    $_SESSION["success"] = "Đã cập nhật môn học thành công";
} else {
    $_SESSION["error"] = "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("location: list.php");

?>