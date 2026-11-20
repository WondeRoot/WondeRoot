CREATE DATABASE IF NOT EXISTS wonderroot;
USE wonderroot;

DROP TABLE IF EXISTS users;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    login VARCHAR(100) NOT NULL UNIQUE,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    role VARCHAR(20) NOT NULL DEFAULT 'utilisateur'
);

INSERT INTO users (login, username, password, role) VALUES
('adminweb', 'Admin Web', MD5('adminweb'), 'adminweb'),
('adminsys', 'Admin Sys', MD5('adminsys'), 'adminsys');