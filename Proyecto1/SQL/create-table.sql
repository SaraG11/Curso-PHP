-- Creacion de tablas

CREATE TABLE usuarios (
    idUser int(10) auto_increment not null,
    nombre varchar(100) not null,
    apellidos varchar(255) null,
    email varchar(100) not null,
    password varchar(255),
    fecha date not null.
    CONTRAINT pk_usuarios PRIMARY KEY(idUser),
    CONSTRAINT uq_email UNIQUE(email)
)ENGINE=InnoDb;

CREATE TABLE categorias(
    idCat int(255) auto_increment not null,
    nombre varchar(100),
    CONTRAINT pk_categorias PRIMARY KEY(idCat)
)ENGINE=InnoDb;

CREATE TABLE entradas(
    id int(255) auto_increment not null,
    idUser int(10) not null,
    idCat int(10) not null,
    titulo varchar(255) not null,
    descripcion MEDIUMTEXT,
    fecha date not null,
    CONSTRAINT pk_entradas PRIMARY KEY(id),
    CONSTRAINT fk_entrada_user FOREIGN KEY(idUser) REFERENCES usuarios(idUser),
    CONSTRAINT fk_entrada_categoria FOREIGN KEY(idCat) REFERENCES categorias(idCat),
)ENGINE=InnoDb;