<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students CRUD</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="form.css">
</head>
<body>

<?php
require_once "conexao.php";
require_once "alunos.php";

$conexao = GetConexao();
$sql = "SELECT ID AS id,
               NOME AS name,
               ESCOLA AS school,
               CURSO AS course
        FROM ALUNO";
$comando = $conexao->prepare($sql);
$comando->execute();
$students = $comando->fetchAll(
    PDO::FETCH_FUNC,
    function ($id, $name, $school, $course) {
        return new Aluno($id, $name, $school, $course);
    }
);
?>
<div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
    <h2>Students Management</h2>

    <a href="formInsert.php" class="btn-add">
        <i class="fa-solid fa-plus"></i> Add new student
    </a>
</div>
<div class="table-container">
<table>
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>School</td>
        <td>Course</td>
        <td>Edit</td>
        <td>Delete</td>
    </tr>

    <?php foreach ($students as $student): ?>
    <tr>
        <td><?= $student->getId(); ?></td>
        <td><?= $student->getName(); ?></td>
        <td><?= $student->getSchool(); ?></td>
        <td><?= $student->getCourse(); ?></td>

        <td>
            <a href="new.php?id=<?= $student->getId(); ?>" class="action edit" title="Edit">
                <i class="fa-solid fa-pen-to-square"></i>
            </a>
        </td>

        <td>
            <a href="delete.php?id=<?= $student->getId(); ?>" class="action delete" title="Delete">
                <i class="fa-solid fa-trash"></i>
            </a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
</div>
</body>
</html>
