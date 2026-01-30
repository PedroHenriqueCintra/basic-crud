<?php
    require_once "alunos.php";
    require_once "conexao.php";

    if (!isset($_POST['name'], $_POST['school'], $_POST['course'])) {
    header("Location: form.php");
    exit;
}
    $name = $_POST["name"];
    $school = $_POST["school"];
    $course = $_POST["course"];

    $student = new Aluno (null, $name , $school, $course);
    $student->Inserir();
    header("Location: form.php");
    exit;