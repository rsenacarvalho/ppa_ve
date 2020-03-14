create database ppa;
use ppa;

create table professores(
	id_professor int primary key auto_increment,
    nome varchar(50),
    email varchar(50),
    telefone varchar(50),
    matricula varchar(50)
    
);

select * from professores;