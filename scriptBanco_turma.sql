create database ppa_turma;

use ppa_turma;

create table turma (
 id_turma int  primary key,
 nome varchar(50),
 turno varchar(50),
 ano varchar(50)
);

alter table turma add nome varchar(50);
alter table turma add turno varchar(50);
alter table turma add ano varchar(50);