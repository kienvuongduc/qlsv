<?php 
    require "../config.php";
    require "../connect_DB.php";
    $id = $_GET["id"];

    $sql = "DELETE FROM subject WHERE id=$id";
    session_start();

if ($conn->query($sql) === TRUE) {
    $_SESSION["success"] = "Đã xóa môn học thành công";
} else {
    $_SESSION["error"] = "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("location: list.php");

?>