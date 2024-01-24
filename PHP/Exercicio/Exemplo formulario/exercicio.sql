create database dbexemplo;

use dbexemplo;

CREATE TABLE tb_usuario (
  id_usuario INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  nm_nome VARCHAR(40) NOT NULL,  
  nm_usuario VARCHAR(10) UNIQUE  NOT NULL,
  ds_senha VARCHAR(10) UNIQUE NOT NULL,
  CONSTRAINT pk_user  PRIMARY KEY(id_usuario)
);

create table dados_cadastro(
Id_cliente INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
Nm_cliente varchar (40) not null,
Ds_email varchar (100) not null,
Ds_rua varchar (40) not null,
Ds_bairro varchar (20) not null,
Nr_numero int (10) not null,
Nr_cep int (15) not null,
Nr_telefone int (15) not null,
CONSTRAINT pk_user  PRIMARY KEY(Id_cliente)
);

CREATE TABLE VENDEDORES (
  Id_vendedor INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  Nm_vendedor varchar (40) not null,
  Ds_email varchar (100) not null,
  ds_cidade varchar (40) not null,
  ds_estado varchar (02) not null,
  CONSTRAINT pk_user  PRIMARY KEY(Id_vendedor)
);
