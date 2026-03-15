create database EMS; -- Employee Management System

use EMS;

create table employees(
    empid int auto_increment primary key, 
    name varchar(30),
    email varchar(30),
    gender enum('male', 'female'),
    age int,
    role enum('HR', 'CEO', 'Staff Member', 'Manager'),
    salary int,
    password varchar(100)
);