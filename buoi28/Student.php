<?php 
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

        function getAge() {
            $currentYear = date("Y");
            $timestamp = strtotime($this->birthday); //trả về số giây tính từ ngày 1/1/1970
            $bornYear = date("Y", $timestamp);
            $age = $currentYear - $bornYear;
            return $age;
        }
    }

    class SinhVienChatLuongCao extends Student {
        public $discount = 10;

        function __construct($id,$name,$birthday,$gender,$discount) {
            parent::__construct($id,$name,$birthday,$gender);
            $this->discount = $discount;
        }
    }

    $sv1 = new SinhVienChatLuongCao(1257, "Tèo Em", "2000-05-19", "nam",20);
    var_dump($sv1);
    echo $sv1->getAge();
    echo "<br>";
    echo $sv1->name;
?>