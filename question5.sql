// First create database

create database user_info;

// create table for user

create table user (user_id int not null, username varchar(255), password varchar(255), primary key(user_id));

// create table for address

create table address(user_id int, street varchar(255), pincode int, country varchar(255), state varchar(255), Phone int, foreign key (user_id) references user(user_id) );