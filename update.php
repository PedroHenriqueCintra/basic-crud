<?php
    require_once "alunos.php";
    require_once "conexao.php";
    require_once "form.php";


    if(!isset($_GET["id"])){
        header("Location: form.php")
    }else{
    $id = $_GET["id"];
    $newName = $_POST['name'];
    $newSchool = $_POST['school'];
    $newCourse = $_POST["course"];
    $student = new Aluno ($id, $newName, $newSchool, $newCourse);
    $student->Update();
    }

    

    
