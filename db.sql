--skript database
drop database toko_kamera;

create database toko_kamera;

use toko_kamera;

create table kameraku(
    id_kamera int primary key not null auto_increment,
    nama_kamera varchar(100) not null,
    brand_kamera char(20) not null,
    harga_kamera int not null,
    stock_kamera int not null
);