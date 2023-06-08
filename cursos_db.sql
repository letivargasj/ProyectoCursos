DROP DATABASE cursos_db;
CREATE DATABASE IF NOT EXISTS cursos_db;
USE cursos_db;

CREATE TABLE estudiante (
  est_usuario varchar(20) NOT NULL,
  est_nombre varchar(50) NOT NULL,
  est_apellido varchar(50) NOT NULL,
  est_correo varchar(50) NOT NULL,
  PRIMARY KEY (est_usuario),
  UNIQUE KEY (est_correo)
);

CREATE TABLE maestro (
  mae_usuario varchar(20) NOT NULL,
  mae_nombre varchar(50) NOT NULL,
  mae_apellido varchar(50) NOT NULL,
  mae_correo varchar(50) NOT NULL,
  PRIMARY KEY (mae_usuario),
  UNIQUE KEY (mae_correo)
);

CREATE TABLE curso (
  cur_nombre VARCHAR(100) NOT NULL,
  cur_duracion FLOAT(11) NOT NULL COMMENT "La duración del curso en horas",
  cur_categoría VARCHAR(50) NOT NULL,
  cur_mae_id VARCHAR(20) NOT NULL,
  PRIMARY KEY (cur_nombre),
  CONSTRAINT fk_curso_maestro
    	FOREIGN KEY (cur_mae_id) 
    	REFERENCES maestro(mae_usuario) 
    	ON DELETE CASCADE ON UPDATE CASCADE
) ;


CREATE TABLE detalle (
  det_id int(11) NOT NULL AUTO_INCREMENT,
  det_cur_id varchar(100) NOT NULL,
  det_est_id varchar(20) NOT NULL,
  PRIMARY KEY (det_id),
  CONSTRAINT `fk_detalle_curso` 
    	FOREIGN KEY (`det_cur_id`) 
    	REFERENCES `curso` (`cur_nombre`) 
    	ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_detalle_estudiante` 
    	FOREIGN KEY (`det_est_id`) 
    	REFERENCES `estudiante` (`est_usuario`) 
    	ON DELETE CASCADE ON UPDATE CASCADE
);
