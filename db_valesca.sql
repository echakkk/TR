-- Membuat database db_valesca
CREATE DATABASE db_valesca;

-- Gunakan database yang baru saja dibuat
USE db_valesca;

-- Membuat tabel role
CREATE TABLE role (
    id_role INT AUTO_INCREMENT PRIMARY KEY,
    role_name VARCHAR(50) NOT NULL UNIQUE
);

-- Membuat tabel user
CREATE TABLE user (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    name VARCHAR(100) NOT NULL,
    password_hash VARCHAR(255) NOT NULL,
    id_role INT,
    FOREIGN KEY (id_role) REFERENCES role(id_role)
);

-- Membuat tabel menu
CREATE TABLE menu (
    id_menu INT AUTO_INCREMENT PRIMARY KEY,
    nama_menu VARCHAR(100) NOT NULL,
    persediaan INT DEFAULT 0,
    harga_menu DECIMAL(10, 2) NOT NULL,
    gambar TEXT
);
CREATE TABLE menu2 (
    id_menu INT AUTO_INCREMENT PRIMARY KEY,
    nama_menu VARCHAR(100) NOT NULL,
    persediaan INT DEFAULT 0,
    harga_menu DECIMAL(10, 2) NOT NULL,
    gambar TEXT
);
CREATE TABLE menu3 (
    id_menu INT AUTO_INCREMENT PRIMARY KEY,
    nama_menu VARCHAR(100) NOT NULL,
    persediaan INT DEFAULT 0,
    harga_menu DECIMAL(10, 2) NOT NULL,
    gambar TEXT
);
CREATE TABLE menu4 (
    id_menu INT AUTO_INCREMENT PRIMARY KEY,
    nama_menu VARCHAR(100) NOT NULL,
    persediaan INT DEFAULT 0,
    harga_menu DECIMAL(10, 2) NOT NULL,
    gambar TEXT
);
CREATE TABLE menu5 (
    id_menu INT AUTO_INCREMENT PRIMARY KEY,
    nama_menu VARCHAR(100) NOT NULL,
    persediaan INT DEFAULT 0,
    harga_menu DECIMAL(10, 2) NOT NULL,
    gambar TEXT
);
CREATE TABLE menu6 (
    id_menu INT AUTO_INCREMENT PRIMARY KEY,
    nama_menu VARCHAR(100) NOT NULL,
    persediaan INT DEFAULT 0,
    harga_menu DECIMAL(10, 2) NOT NULL,
    gambar TEXT
);
CREATE TABLE menu7 (
    id_menu INT AUTO_INCREMENT PRIMARY KEY,
    nama_menu VARCHAR(100) NOT NULL,
    persediaan INT DEFAULT 0,
    harga_menu DECIMAL(10, 2) NOT NULL,
    gambar TEXT
);
CREATE TABLE menu8 (
    id_menu INT AUTO_INCREMENT PRIMARY KEY,
    nama_menu VARCHAR(100) NOT NULL,
    persediaan INT DEFAULT 0,
    harga_menu DECIMAL(10, 2) NOT NULL,
    gambar TEXT
);
CREATE TABLE menu9 (
    id_menu INT AUTO_INCREMENT PRIMARY KEY,
    nama_menu VARCHAR(100) NOT NULL,
    persediaan INT DEFAULT 0,
    harga_menu DECIMAL(10, 2) NOT NULL,
    gambar TEXT
);
CREATE TABLE menu10 (
    id_menu INT AUTO_INCREMENT PRIMARY KEY,
    nama_menu VARCHAR(100) NOT NULL,
    persediaan INT DEFAULT 0,
    harga_menu DECIMAL(10, 2) NOT NULL,
    gambar TEXT
);