create database ppa_disc;

use ppa_disc;

create table disciplina (
 id_disc int(11) primary key,
 nomeDaDisc varchar(50) NULL,
 nomeDaProf varchar(50) NULL,
 descricao text
);

alter table disciplina add nomeDaDisc varchar(50);

alter table disciplina add nomeDaProf varchar(50);

alter table disciplina add descricao text;