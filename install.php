<?php

include 'helpers/db.php';

if(!file_exists('lock')) {
    echo 'cannot perform operation';
    die();
}

$conn = get_conn_to_server();

//$conn->query('create database perle_product;');
$conn->query('use m965901i_perle;') or die("ERROR");

$conn->query('create table categories (
	id integer primary key auto_increment,
    category varchar(100) not null
);') or die("ERROR");

$conn->query('create table products (
    id integer primary key auto_increment,
    photo_src varchar(800) not null,
    title varchar(255) not null,
    price varchar(20) not null,
    category_id integer not null,
    foreign key(category_id) references categories(id)
);');

$conn->query("insert into categories(category) values('Bracelets'), ('Chains'), ('Rings');");

$file = fopen('lock', 'w');
fclose($file);
