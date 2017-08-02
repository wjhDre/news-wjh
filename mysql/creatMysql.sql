drop database if exists newsWJH;

create database newsWJH;

use newsWJH;

create table user(
	id int auto_increment primary key,
	username varchar(20) not null,
	password varchar(20) not null,
	email varchar(30) not null
)engine=Innodb default charset=utf8;

create table jiequxinwen(
	id int auto_increment primary key,
	title varchar(100) not null,
	content longtext not null,
	img varchar(100) not null,
	tm varchar(20) not null
)engine=Innodb default charset=utf8;

create table ruzhujigou(
	id int auto_increment primary key,
	title varchar(100) not null,
	content longtext not null,
	img varchar(100) not null,
	tm varchar(20) not null
)engine=Innodb default charset=utf8;

create table jiequhuodong(
	id int auto_increment primary key,
	title varchar(100) not null,
	content longtext not null,
	img varchar(100) not null,
	tm varchar(20) not null
)engine=Innodb default charset=utf8;