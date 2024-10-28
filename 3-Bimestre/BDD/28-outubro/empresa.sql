create database empresa;
use empresa;

create table departamento (
cod_dept int primary key,
descricao varchar(100) not null
);

create table funcionario (
cod_func int primary key,
nome varchar(100) not null,
endereco varchar(150),
telefone varchar(15),
cod_departamento int,
foreign key (cod_departamento) references departamento (cod_dept)
);

create table dependentes (
cod_depend int primary key,
cod_funcionario int,
nome varchar(100) not null,
data_nasc date,
foreign key (cod_funcionario)  references funcionario (cod_func)
);

desc departamento;
desc funcionario;
desc dependentes;

alter table funcionario add column data_nasc date;

alter table dependentes add column profissao varchar(30);

alter table departamento modify column descricao char(50);

alter table dependentes add column teste varchar(100);

alter table dependentes drop column teste;

insert into departamento (cod_dept, descricao) values
(1, 'Recursos Humanos'),
(2, 'Tecnologia da Informação'),
(3, 'Financeiro');

insert into funcionario(cod_func, nome, endereco, telefone, cod_departamento, data_nasc ) values
(1, 'João Silva', 'Rua A, 123' , '9999-1111', 1, '1985-01-15'),
(2, 'Maria Oliveira', 'Rua B, 456' , '9999-2222', 2, '1990-05-22'),
(3, 'Carlos Souza', 'Rua C, 789' , '9999-3333', 3, '1978-09-10');

insert into dependentes (cod_depend, cod_funcionario, nome, data_nasc) values
(1, 1, 'Ana Silva', '2010-02-20'),
(2, 2, 'Pedro Oliveira', '2012-08-14'),
(3, 3, 'Lucas Souza' , '2015-11-30');

