create database bancoppa;

use bancoppa;

create table projeto (
 id_projeto int auto_increment primary key,
 titulo varchar(100),
 curso varchar(100),
 serie int,
 disciplina varchar(100),
 tema varchar(100),
 problema varchar(200),
 justificativa varchar(100),
 objetivogeral varchar(200),
 objetivosespecificos varchar(300),
 horarias int(100),
 atividades varchar(200),
 projeto varchar(100),
 produto varchar(100)
);

select * from projeto;

drop database bancoppa;

