CREATE DATABASE examen_maxi;

USE examen_maxi;

CREATE TABLE personas (
    dni INT(9) NOT NULL,
    nombre VARCHAR(100) NOT NULL,
    apellido VARCHAR(100) NOT NULL,
    genero VARCHAR(50) NOT NULL,
    edad INT(3) NOT NULL,
    PRIMARY KEY (dni)
)ENGINE=InnoDB;

CREATE TABLE cursos (
    legajo INT(9) NOT NULL,
    nombre VARCHAR(100) NOT NULL,
    descripcion VARCHAR(255),
    modalidad VARCHAR(50) NOT NULL,
    PRIMARY KEY (legajo)
)ENGINE=InnoDB;

CREATE TABLE personas_cursos (
    id INT(9) NOT NULL AUTO_INCREMENT,
    dni_persona INT(9) NOT NULL,
    legajo_curso INT(9) NOT NULL,
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id),
    CONSTRAINT fk_pc_persona FOREIGN KEY (dni_persona) REFERENCES personas (dni),
    CONSTRAINT fk_pc_curso FOREIGN KEY (legajo_curso) REFERENCES cursos (legajo)
)ENGINE=InnoDB;