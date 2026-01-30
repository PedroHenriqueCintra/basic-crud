<?php
require_once "alunos.php";
require_once "conexao.php";

if (!isset($_GET['id'])) {
    header("Location: form.php");
    exit;
}

if (!isset($_POST['name'], $_POST['school'], $_POST['course'])) {
    header("Location: form.php");
    exit;
}

$id = $_GET['id'];
$newName   = $_POST['name'];
$newSchool = $_POST['school'];
$newCourse = $_POST['course'];

$student = new Aluno($id, $newName, $newSchool, $newCourse);
$student->Update();

header("Location: form.php"); 
exit;
