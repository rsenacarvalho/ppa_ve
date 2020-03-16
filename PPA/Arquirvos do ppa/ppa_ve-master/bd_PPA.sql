create database ppave;
use ppave;
drop database ppave;

create table projeto(
	id_projeto int auto_increment primary key,
    titulo varchar(100),
    tema varchar(100),
    problema varchar(255),
    justificativa varchar(100),
    objetivoGeral varchar(255),
    objetivoEspecifico varchar(300),
    horarios int,
    atividadades varchar(100),
    projeto varchar(100),
    produto varchar(100)
);

create table professor(
	id_professor int auto_increment primary key,
    nome varchar(255) NOT NULL,
    email varchar(255),
    telefone int
);

create table disciplina(
	id_disciplina int auto_increment primary key,
    nome varchar(30),
    descricaoDisciplina varchar(255)
);

create table curso(
	id_curso int auto_increment primary key,
    nomeCoordenador varchar(100),
    descricaoCurso varchar(255)
);

create table turma(
	id_turma int auto_increment primary key,
    anoReferencia int,
    serie SMALLINT,
    turno varchar(20),
    /*Descrição é o número da turma Ex: 732*/
    descricaoTurma varchar(3),
    id_curso int,
    foreign key (id_curso) references curso(id_curso)
);

create table aluno(
	matricula VARCHAR(15) PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    idade SMALLINT,
    email VARCHAR(255),
    telefone int,
    sexo varchar(20),
    id_turma int,
    ano int,
    foreign key (id_turma) references turma(id_turma)
);

/* Relaciona Curso com Disciplina*/
create table cursoDisciplina(
	id_cursoDisciplina int auto_increment primary key,
    id_curso int,
    id_disciplina int,
    foreign key (id_curso) references curso(id_curso),
    foreign key (id_disciplina) references disciplina(id_disciplina)
);
select * from cursoDisciplina;



/*Relaciona Disciplina, Professor e Aluno*/
create table oferta_ppa(
	id_oferta int auto_increment primary key,
    id_projeto int,
    foreign key (id_projeto) references projeto(id_projeto)
);



/*Relaciona Professor e Oferta*/


create table ofertaDisciplina(
	id_oferta int,
    id_disciplina int,
    primary key (id_oferta, id_disciplina),
    foreign key (id_oferta) references oferta_ppa(id_oferta),
    foreign key (id_disciplina) references disciplina(id_disciplina)
    
);

create table professorOferta(
    id_professor int,
    id_oferta int,
    id_disciplina int,   
    foreign key (id_oferta,id_disciplina) references ofertaDisciplina(id_oferta,id_disciplina),
    foreign key (id_professor) references professor(id_professor),
    primary key (id_professor, id_oferta, id_disciplina)
);

select * from professorOferta;
create table alunoOferta(
	id_alunoOferta int auto_increment primary key,
    matricula VARCHAR(15),
    id_oferta int,
    frequencia int,
    foreign key (matricula) references aluno(matricula),
	foreign key (id_oferta) references oferta_ppa(id_oferta)
);
/*Relaciona Avaliação com Oferta*/
create table avaliacao(
	id_avaliacao int,
    id_alunoOferta int,
    descricao varchar(100),
    id_professor int,
    nota float,
    dataAvaliacao date,
    primary key (id_avaliacao,id_alunoOferta),
	foreign key (id_alunoOferta) references alunoOferta(id_alunoOferta),
    foreign key (id_professor) references professor(id_professor)
);



select * from avaliacao;

/*Relaciona Aluno e Oferta*/



