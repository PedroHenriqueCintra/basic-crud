<?php
    require_once "conexao.php";
    require_once "alunos.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="formInsert.css">
</head>
<body>
    <form action="insert.php" method="POST">
    <h2>Add New Student</h2>
    <label>Name</label>
    <input type="text" name="name" required>
    <label>School</label>
    <input type="text" name="school" required>
    <label>Course</label>
    <input type="text" name="course" required>
    <button type="submit">Save Student</button>
</form>

</body>
</html>