USE blog_master;
SHOW TABLES;
##DROP TABLE usuarios;

USE blog_master;
CREATE TABLE usuarios(
    id INT(255) AUTO_INCREMENT NOT NULL,
    nombre  VARCHAR(255) NOT NULL,
    apellido VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    fecha DATE NOT NULL,
    CONSTRAINT pk_usuarios PRIMARY KEY(id),
    CONSTRAINT uq_email UNIQUE(email)
)ENGINE=InnoDb;

CREATE TABLE categorias(
    id int(255) AUTO_INCREMENT NOT NULL,
    nombre VARCHAR(255) NOT NULL,
    CONSTRAINT pk_categorias PRIMARY KEY(id)
)ENGINE=InnoDb;

CREATE TABLE entradas(
    id INT(255) AUTO_INCREMENT NOT NULL,
    usuario_id INT(255) NOT NULL,
    categoria_id INT(255) NOT NULL,
    titulo VARCHAR(255) NOT NULL,
    descripcion MEDIUMTEXT,
    fecha DATE NOT NULL,
    CONSTRAINT pk_entradas PRIMARY KEY(id), 
    CONSTRAINT fk_entrada_usuario FOREIGN KEY(usuario_id) REFERENCES usuarios(id),
    CONSTRAINT fk_entrada_categoria FOREIGN KEY(categoria_id) REFERENCES categorias(id) 
)ENGINE=InnoDb;

#CASCADE
