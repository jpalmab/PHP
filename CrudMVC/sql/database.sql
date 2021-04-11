create database mvc-rol;
use database mvc-rol;

create table roles
(
    idRol int not null AUTO_INCREMENT,
    nombre varchar(100),
    primary key(idRol)
);