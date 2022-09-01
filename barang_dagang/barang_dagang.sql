create database barang_dagang;
use barang_dagang;

create table barang_dagang (id int(10),PRIMARY KEY AUTO_INCREMENT NOT NULL, nama_barang varchar(100) NOT NULL, variety ENUM
('indomie Goreng','odol','minyak goreng','buku tulis ','pensil') NOT NULL, stock int(20) NOT NULL, harga_barang int(20) NOT NULL );