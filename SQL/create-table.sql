-- Creacion de tablas

CREATE TABLE usuarios (
    idUser int(10) not null,
    nombre varchar(100),
    apellidos varchar(255),
    email varchar(100),
    password varchar(255)
);