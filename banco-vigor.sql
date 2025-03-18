show databases;
create database vigorhiperboreo;
use vigorhiperboreo;

show tables;

create table cliente(
idcliente int not null primary key auto_increment,
nome varchar(255) not null, 
email varchar(255) not null, 
telefone int not null,
mensagem varchar(1000) 
)