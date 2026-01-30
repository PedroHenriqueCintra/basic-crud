<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="new.css">
</head>
<body>
    <?php
        require_once "alunos.php";
        require_once "conexao.php";
        if(!isset($_GET["id"])){
            header("Location:form.php");
            exit;
        }
        $id = $_GET["id"];
        $conexao = GetConexao();
                $sql = "SELECT ID AS id,
                               NOME AS name,
                               ESCOLA AS school,
                               CURSO AS course
                     FROM ALUNO WHERE ID = :ID"
                     ;
                $comando = $conexao->prepare($sql);
                $comando->bindParam(":ID", $id);
                $comando->execute();
                $lista = $comando->fetchAll(PDO::FETCH_FUNC,function ($id, $name, $school, $course) {return new Aluno($id, $name, $school, $course);});
        foreach($lista as $value):
    ?>
    <form method="POST" action="update.php?id=<?= $value->getId() ?>">
        <label for="">Insert a new name</label>
        <input type="text" name="name"value="<?= $value->getName(); ?>">
        <label for="">Insert a new school</label>
        <input type="text" name="school" value="<?= $value->getSchool(); ?>">
        <label for="">Insert a new course</label>
        <input type="text" name="course" value="<?= $value->getCourse();?>">
        <button type = "submit"><a>Update data</a></button>
    </form>
    <?php
    endforeach;
    ?>
</body>
</html>