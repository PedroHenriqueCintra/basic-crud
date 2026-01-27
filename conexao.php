<?php   
    
function GetConexao(){
    $host = "localhost:3306";
    $banco = "ALUNOS";
    $usuario = "root";
    $senha = "root";

    $stringConexao = "mysql:host=$host;dbname=$banco";
     $conexao = new PDO($stringConexao, $usuario, $senha);
    return $conexao;
}