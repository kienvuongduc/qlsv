<?php         //nhiệm vụ là lưu trữ data tương đương 1 dòng dữ liệu

    class Student {
        public $id;
        public $name;
        public $birthday;
        public $gender;
    
        function __construct($id, $name, $birthday, $gender) {
            $this->id = $id;
            $this->name = $name;
            $this->birthday = $birthday;
            $this->gender = $gender;
        }
    }
    
?>