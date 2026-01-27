<?php
    class Aluno{
        private  ?int $id;
        private string $name;
        private string $school;
        private string $course;

        public function __construct(?int $id, string $name, string $school, string $course){
            $this->id = $id;
            $this->name = $name;
            $this->school = $school;
            $this->course = $course;
        }


        public function getId(): int{ 
            return $this->id;
        }

        public function getName(): string{
            return $this->name;
        }
        public function getSchool(): string{ 
            return $this->school;
        }

        public function getCourse(): string{
            return $this->course;
        }

        public function Inserir(){
            $sql = "INSERT INTO ALUNO (NOME, ESCOLA,CURSO) VALUES(':PNAME', ':PSCHOOL', ':PCOURSE');";
            $conexao = GetConexao();
            $comando = $conexao->prepare($sql);
            $comando->bindParam(":PNAME", $this->name);
            $comando->bindParam(":PSCHOOL", $this->school);
            $comando->bindParam(":PCOURSE", $this->course);
            $comando->execute();
            $this->id = (int) $conexao->lastInsertId();

        }

        public function Update(){ 
            $sql = "UPDATE ALUNO SET NOME = :PNOME, ESCOLA = :PESCOLA, CURSO = :PCURSO WHERE ID = :ID;";

            $conexao = GetConexao();
            $comando = $conexao->prepare($sql);
            $comando->bindParam(":PNOME", $this->name);
            $comando->bindParam("PESCOLA", $this->school);
            $comando->bindParam(":PCURSO", $this->course);
            $comando->execute();
        }

        public function Delete(){
            $sql = "DELETE FROM ALUNO WHERE ID = :ID;";

            $conexao = GetConexao();
            $comando = $conexao->prepare($sql);
            $comando->bindParam(":ID", $this->id);
            $comando->execute();
        }

    }