create database riti;

create table  if not exists apply (
	id int auto_increment primary key not null,
    email varchar(100) ,
    firstName varchar(100) ,
    lastname varchar(100) ,
    profession varchar(100),
    certificate varchar(100) ,
    address varchar(100) ,
    dob varchar(100),
    gender varchar(100),
    maritalStatus varchar(100),
    occupation varchar(100),
    designation varchar(100),
     cv varchar(100)   
);

create table  if not exists contact (
	id int auto_increment primary key not null,
    email varchar(100) not null,
    name varchar(100) not null,
    county varchar(150) not null,
    message text
);

create table  if not exists call (
	id int auto_increment primary key not null,
    email varchar(100) not null,
    name varchar(100) not null,
    county varchar(150) not null,
    message text
);

create table  if not exists tenders (
	id int auto_increment primary key not null,
    status varchar(100) not null,
    code varchar(100) not null,
    decription text not null
    
);