CREATE DATABASE tienda_master;
use tienda_master;

CREATE TABLE users (
id int(200) auto_increment not null,
nombre varchar(100) not null,
apellidos varchar (150),
email varchar(255) not null,
password varchar(150) not null,
rol varchar(20),
imagen varchar(255),
CONSTRAINT pk_users PRIMARY KEY(id),
CONSTRAINT uq_email UNIQUE(email)
)ENGINE=InnoDb;

SELECT * FROM users;
INSERT INTO users VALUES(NULL, 'Admin2', 'administrador', 'admin2@admin.com', 'admin', 'admin', null);

CREATE TABLE categoria (
id_cat int(200) auto_increment not null,
nombre varchar(100) not null,
CONSTRAINT pk_categoria PRIMARY KEY(id_cat)
)ENGINE=InnoDb;


SELECT * FROM categoria;

CREATE TABLE productos (
id_prod int(200) auto_increment not null,
id_cat int(200),
nombre varchar(100) not null,
descripcion text,
precio float(100,2),
stock int(100) not null,
oferta varchar(2),
fecha date not null,
imagen varchar(255),
CONSTRAINT pk_producto PRIMARY KEY(id_prod),
CONSTRAINT fk_producto_categoria FOREIGN KEY(id_cat) REFERENCES categoria(id_cat)
)ENGINE=InnoDb;

DESCRIBE productos;

CREATE TABLE pedidos (
id_ped int(200) auto_increment not null,
id_user int(200),
pais varchar(100) not null,
localidad varchar(100) not null,
direccion varchar(255) not null,
precio float(250,2) not null,
estado varchar(20) not null,
fecha date,
hora time,
CONSTRAINT pk_pedidos PRIMARY KEY(id_ped),
CONSTRAINT fk_pedidos_users FOREIGN KEY(id_user) REFERENCES users(id)
)ENGINE=InnoDb;

DESCRIBE pedidos;

CREATE TABLE linea_pedidos (
id_linea int(200) auto_increment not null,
id_ped int(200),
id_prod int(200),
unidades int(100) not null, 
CONSTRAINT pk_linea_pedidos PRIMARY KEY(id_linea),
CONSTRAINT fk_linea_pedido FOREIGN KEY(id_ped) REFERENCES pedidos(id_ped),
CONSTRAINT fk_linea_producto FOREIGN KEY(id_prod) REFERENCES productos(id_prod)
)ENGINE=InnoDb;

