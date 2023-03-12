#RENOMBRAR UNA TAVLA#
USE blog_master;
DESC usuarios_renom;
SHOW TABLES;
ALTER TABLE usuarios RENAME TO usuarios_renom;

#cambiar nombre de una columna#
USE blog_master;
ALTER TABLE usuarios_renom CHANGE apellidos apellido VARCHAR(100) NULL;

#MODIFICAR COLUMNA SIN CAMBIAR NOMBRE#
USE blog_master;
ALTER TABLE usuarios_renom MODIFY apellido CHAR(50) NOT NULL;

#AGREGAR COLOMNA#
USE blog_master;
ALTER TABLE usuarios_renom ADD website VARCHAR(100) NULL;

#AGREGAR RESTRICCION A COLUMNA#
USE blog_master;
ALTER TABLE usuarios_renom ADD CONSTRAINT uq_email UNIQUE(email);

#BORRAR UNA COMUNA#
USE blog_master;
ALTER TABLE usuarios_renom DROP website;