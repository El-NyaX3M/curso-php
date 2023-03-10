/*
Lenguaje Estructurado de Consulta
Base de Datos: Una colección de datos que están organizados.

Gestores o Menjadores de BD son los programas que nos permiten
administrar los datos.

Ejemplos de Gestores de BD: Microsoft Access, Microsoft SQL Server,
ORACLE, Informix, DBASE, SQL Lite, PostgreSQL, MySQL

Una sentencia SQL es una línea de código para traajar con nuestra BD

Existen 2 tipos de sentencias SQL:
1) Sentencias estructurales: Son las que nos permitirán crear, modificar,
    o eliminar objetos, usuarios, y propiedades de nuestra BD.
2) Sentencias de datos: Son las que nos permitirán insertar, eliminar,
    modificar y buscar información en nuestra BD.

En MySQL existen 2 tipos de engine para tablas:
1) MyISAM - Tablas Planas: Como si fuera a trabajar datos con Excel.
2) InnoDB - Tablas Relacionales: Son como si fuera a trabajar datos en Access.
*/

CREATE DATABASE mis_contactos;

USE mis_contactos;

CREATE TABLE contactos(
    email VARCHAR(50) NOT NULL PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    sexo CHAR(1),
    nacimiento DATE,
    telefono VARCHAR (13),
    pais VARCHAR(50) NOT NULL,
    imagen VARCHAR(50),


    FULLTEXT KEY buscador(email, nombre, sexo, telefono, pais)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE pais(
    id_pais INT NOT NULL AUTO_INCREMENT,
    pais VARCHAR(50) NOT NULL,

    PRIMARY KEY(id_pais)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO pais(pais) VALUES
    ("México"),
    ("Colombia"),
    ("Guatemala"),
    ("España"),
    ("Brasil"),
    ("Uruguay"),
    ("Perú"),
    ("Argentina"),
    ("Chile"),
    ("Paraguay"),
    ("Honduras"),
    ("El Salvador"),
    ("Nicaragua"),
    ("Costa Rica"),
    ("Panamá"),
    ("Venezuela"),
    ("Ecuador"),
    ("Bolivia"),
    ("Canadá");
