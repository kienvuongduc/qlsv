<?php 
    class StudentController {
        function list() {
            $studentRepository = new StudentRepository();
            $students = $studentRepository->getAll();
            require "view/student/list.php";
        }

        function add(){
            require "view/student/add.php";
        }

        function save(){
            $data = $_POST;
            $studentRepository = new StudentRepository();
            if($studentRepository->save($data)) {
                $_SESSION["success"] = "Đã tạo sinh viên thành công";
            }
            else {
                $_SESSION["error"] = $studentRepository->error;
            }
            header("location:/");

        }
        function edit(){
            require "view/student/edit.php";
        }
    }
?>