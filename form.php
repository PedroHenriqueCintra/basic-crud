
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form method="POST">
            <button><a href="">Inserir novo aluno</a></button>
            <table>
                <?php

                require_once "conexao.php";
                require_once "alunos.php";
    
                $conexao = GetConexao();
                $sql = "SELECT ID AS id,
                               NOME AS name,
                               ESCOLA AS school,
                               CURSO AS course
                     FROM ALUNO;";
                $comando = $conexao->prepare($sql);
                $comando->execute();
                $lista = $comando->fetchAll(PDO::FETCH_FUNC,function ($id, $name, $school, $course) {return new Aluno($id, $name, $school, $course);});
                ?>
                <tr><td>ID</td><td>Name</td><td>School</td><td>Course</td><td>Update</td> <td>Delete</td></tr>
                <?php
                foreach ($lista as $p ):
                ?><tr><td><?= $p->getId(); ?></td><td><?= $p->getName(); ?></td><td><?= $p->getSchool(); ?></td><td><?= $p->getCourse(); ?></td>
                <td><a href="update.php?id=<?= $p->getId();?>">Update</a></td><td><a href="delete.php?id=<?=$p->getId();?>">Delete</a></td></tr>
                <?php
                endforeach;
                ?>  
            </table>
        </form>
        
    </body>
    </html>