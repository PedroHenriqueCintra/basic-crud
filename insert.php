<?php
    require_once "alunos.php";
    require_once "conexao.php";
    require_once "form.php";

    $name = $_POST["name"];
    $school = $_POST["school"];
    $course = $_POST["course"];

    $student = new Aluno ('', $name , $school, $course);
    $student->Inserir();