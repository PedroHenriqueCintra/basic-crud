CREATE DATABASE ALUN;
USE ALUN;

CREATE TABLE ALUNO(
	ID INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    NOME TEXT NOT NULL,
    ESCOLA TEXT NOT NULL,
    CURSO TEXT NOT NULL
);

INSERT INTO ALUNO (NOME, ESCOLA, CURSO) VALUES
('Lucas Andrade', 'SESI Matão', 'Electrical Systems'),
('Mariana Oliveira', 'SESI Matão', 'Industrial Automation'),
('Rafael Santos', 'SENAI Matão', 'CNC Turning'),
('Bruno Ferreira', 'SENAI Matão', 'Industrial Mechanics'),
('Diego Martins', 'SENAI Matão', 'Electrical Installations'),
('Ana Beatriz Lima', 'ETEC Sylvio de Mattos Carvalho', 'Systems Development'),
('Gabriel Rocha', 'ETEC Sylvio de Mattos Carvalho', 'Systems Development'),
('Pedro Henrique Costa', 'ETEC Sylvio de Mattos Carvalho', 'Mechatronics'),
('Carolina Nunes', 'SENAI Matão', 'CNC Programming'),
('Felipe Azevedo', 'SESI Matão', 'Electrical Engineering Fundamentals');
select * from ALUNO;