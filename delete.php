<?php
    require_once "alunos.php";
    require_once "conexao.php";
    
    if(!isset($_GET["id"])){
        header("Location: index.php");
    exit;
    }else{
        $id = (int)$_GET["id"];
        $aluno = new Aluno($id, "", "", "");
        $aluno->Delete();
        header("Location:form.php");
        exit;
    }