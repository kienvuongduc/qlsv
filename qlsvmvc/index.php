<?php 
    session_start();

    //load models
    require "config.php";
    require "connect_DB.php";
    require "functions.php";
    require "model/Student.php";
    require "model/StudentRepository.php";

    //router
    $c = $_GET["c"] ?? "student";
    $a = $_GET["a"] ?? "list";
    $controllerName = ucfirst($c). "Controller"; //StundenController
    require "controller/" . $controllerName . ".php";
    $controller = new $controllerName(); //new StudentController();
    $controller->$a(); //$controller->list();