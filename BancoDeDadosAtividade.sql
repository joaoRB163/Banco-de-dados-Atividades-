
/*	

	+-----------------------------------+
	|Abrir XAMPP no pc					|
	+-----------------------------------+
	|Acessar o mySQL via Shell:			|
	|mySQL -h localhost -u root -p		|
	+-----------------------------------+
	|mostrar database existente:		|
	|show databases;					|
	+-----------------------------------+
	|Acessas database:					|
	|use "nome";						|
	+-----------------------------------+
	|Mostrar tabelas existentes:		|
	|show tables;						|
	+-----------------------------------+
	|Mostrar atributos de uma tabela:	|
	|desc "nome_tabela";				|
	+-----------------------------------+
	|Mostrar o que há numa tabela:		|
	|select *from "nome";				|
	+-----------------------------------+
*/

/*Criar banco de dados*/
CREATE DATABASE frontEbackEnd;

/*usar o banco de dados criado*/
USE frontEbackEnd;

/*Criar tabela*/
CREATE TABLE contatos(
	nome VARCHAR (255) NOT NULL,
	email VARCHAR (255) NOT NULL,
	telefone VARCHAR (11) NOT NULL,
	id_user INT (10) PRIMARY KEY NOT NULL auto_increment
);

/*Acessar no navegador: localhoost/formulario*/