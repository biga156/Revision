
create database if not exists tp1 default character set utf8 collate utf8_general_ci;
use tp1;


set foreign_key_checks =0;


drop table if exists contacts;
create table contacts (
	con_id int not null auto_increment primary key,
	con_prenom varchar(20),
	con_nom varchar(10),
	con_adresse varchar(100)
)engine=innodb;


drop table if exists produits;
create table produits (
	pro_id int not null auto_increment primary key,
	pro_bien varchar(20),
	pro_caracter varchar(100),
	pro_adresse varchar(100)
)engine=innodb;


drop table if exists acheter;
create table acheter (
	ach_id int not null auto_increment primary key,
	ach_numero int,
	ach_type varchar (50),
	ach_caracter varchar(100),
	pro_adresse varchar(100)
)engine=innodb;




set foreign_key_checks =1;

insert into contacts values (1,'Prenom1', 'Nom1','Adresse1');
insert into contacts values (2,'Prenom2', 'Nom2','Adresse2');
insert into contacts values (3,'Prenom3', 'Nom3','Adresse3');


insert into produits values (1,'bien1', 'caracteristique1','adresse1');
insert into produits values (2,'bien2', 'caracteristique2','adresse2');
insert into produits values (3,'bien3', 'caracteristique3','adresse3');


insert into acheter values (1,'1','type1', 'caracteristique1','adresse1');
insert into acheter values (2,'2', 'type2','caracteristique2','adresse2');
insert into acheter values (3,'3','type3', 'caracteristique3','adresse3');

