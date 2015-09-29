/*###################################################
###                TABLA CATEGORIA                ###
###################################################*/

CREATE TABLE categoria (
       id_categoria integer NOT NULL AUTO_INCREMENT,
       nombre varchar(20) NOT NULL,
       CONSTRAINT pk_categoria PRIMARY KEY (id_categoria),
       CONSTRAINT uk_categoria UNIQUE (nombre)
);

/*#################################################*/



/*###################################################
###                 TABLA PRODUCTO                ###
###################################################*/

CREATE TABLE producto (
       id_producto integer NOT NULL AUTO_INCREMENT,
       fk_id_categoria integer NOT NULL,
       nombre varchar(20) NOT NULL,
       descripcion varchar(254) NOT NULL,
       precio real(6,2),
       CONSTRAINT pk_noticia PRIMARY KEY (id_producto),
       CONSTRAINT uk_noticia UNIQUE (nombre)
);

       ALTER TABLE producto
       ADD CONSTRAINT fk_producto_categoria FOREIGN KEY (fk_id_categoria)
               REFERENCES categoria (id_categoria)
                       ON DELETE RESTRICT
                       ON UPDATE RESTRICT;

/*#################################################*/



/*###################################################
###                 TABLA IMAGEN                  ###
###################################################*/

CREATE TABLE imagen (
       id_imagen integer NOT NULL AUTO_INCREMENT,
       fk_id_producto integer NOT NULL,
       path varchar(200) NOT NULL,
       CONSTRAINT pk_imagen PRIMARY KEY (id_imagen),
       CONSTRAINT uk_producto UNIQUE (path)
);

       ALTER TABLE imagen
       ADD CONSTRAINT fk_imagen_producto FOREIGN KEY (fk_id_producto)
               REFERENCES producto (id_producto)
                       ON DELETE CASCADE
                       ON UPDATE CASCADE;

/*#################################################*/
