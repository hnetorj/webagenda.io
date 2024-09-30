create database webagenda;

use webagenda;

create table funcionario(
id int primary key auto_increment,
usuario varchar(20) not null,
senha varchar(20) not null
);

create table cliente(
id int primary key auto_increment,
usuario varchar(20) not null unique,
senha varchar(20) not null,
nome varchar(50) not null,
genero smallint not null,
email varchar(50) not null unique,
endereco varchar(150) not null,
nascimento date not null,
celular varchar(11) not null,
telefone varchar(10) not null
);

alter table cliente
add column cpf varchar(11) unique not null;

create table advogado(
id int primary key auto_increment,
usuario varchar(20) not null unique,
senha varchar(20) not null,
nome varchar(50) not null,
email varchar(50) not null unique,
celular varchar(11) not null,
telefone varchar(10) not null,
oab varchar(5) not null unique
);

create table newsletter(
id int primary key not null,
email varchar(50) not null unique
);

