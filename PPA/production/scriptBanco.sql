create database ppa;

use ppa;

create table aluno (
 nome varchar(50),
 email varchar(50),
 id_curso int,
 id_turma varchar(16),
 ano_letivo varchar(10),
 sexo varchar(10),
 telefone varchar(18),
 num_matricula varchar(15) primary key
 
);
