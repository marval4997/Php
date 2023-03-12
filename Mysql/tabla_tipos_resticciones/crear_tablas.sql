SHOW DATABASES;
CREATE DATABASE blog_master;

USE blog_master;
SHOW TABLES;

/*
TIPOS DE DATOS
//////////numeros
int(numero entero)
interger(cifras)     255

VARCHAR(CARACTERES) max 255
chart(caracteres)
float(cifras decimales)
date(fechas)

text 65535 caracteres
mediuntext 16 millones de caracteres
longtext 4 billones de caracteres

//enteros mas grandes 
mediunint
bigint
*/

/*
Crear Tbala
*/
USE blog_master;
CREATE TABLE usuarios(
    id INT (11) NOT NULL,
    nombre VARCHAR(100) NOT NULL,
    apellidos VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL
);

USE blog_master;
SHOW TABLES;

USE  blog_master;
INSERT INTO usuarios(id, nombre, apellidos, email, password) 
VALUES("Margarito","Valdez","margarito@gmail.com","1234sd");

USE blog_master;
SELECT * FROM usuarios;

USE blog_master;
DESC usuarios;

/*BORRAR TABLAS*/
USE blog_master;
DROP TABLE usuarios;

USE blog_master;
SHOW TABLES;

/*RESTRICCIONES DE INTEGRIDAD*/

USE blog_master;
CREATE TABLE usuarios(
    id INT (11) AUTO_INCREMENT NOT NULL,
    nombre VARCHAR(100) NOT NULL, /*DATO NO NULO*/
    apellidos VARCHAR(100) DEFAULT 'VALDEZ', /*DATO POR DEFECTO*/
    email VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL,
    CONSTRAINT pk_usuarios PRIMARY KEY(id)
);