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
    }
?>