mysql -u root

#criar base
create database avaliacao;

#chamar base
use avaliacao;

#criar tabela
create table usuario(
    idusuario int auto_increment primary key,
    nome varchar(50),
    login varchar(20) unique,
    senha varchar(50),
    perfil enum('adm','user')
);

#inserir dado na tabela
insert into usuario values(null,'victor','victor',md5('123'),'adm');
insert into usuario values(null,'bruno','bruno',md5('123'),'adm');
insert into usuario values(null,'henrique','henrique',md5('123'),'user'); # md5 -> para criptografar.

UPDATE usuario set nome = 'Victor Hugo' where idusuario = 1;
UPDATE usuario set nome = 'Bruno Santana' where idusuario = 2;
UPDATE usuario set nome = 'Henrique' where idusuario = 3;

select * from usuario;

---------------------------------------------------------------------------------------------------------

create table filmes(
    idfilme int auto_increment primary key,
    nome varchar(50),
    ano int(4),
    genero varchar(20),
    nota double,
    sinopse varchar(600)
);

desc filmes;

select * from filmes;