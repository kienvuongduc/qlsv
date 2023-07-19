<?php  //Làm mọi thứ liên quan đến lấy dữ liệu ra, update, delete, insert,...

    class StudentRepository {
        function getAll(){
            global $conn; // phải dùng global để bên trong nhìn thấy biến bên ngoài hàm
            $sql ="SELECT * FROM student";
            $result = $conn->query($sql);
            $students = [];
            if($result->num_rows > 0) {
                while($row = $result-> fetch_assoc()) {
                    $student = new Student($row["id"], $row["name"], $row["birthday"], $row["gender"]);
                    $students[] = $student;
                }   
            }
            return $students;
        }
    }
?>