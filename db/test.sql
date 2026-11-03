CREATE DATABASE IF NOT EXISTS wonderroot;
USE wonderroot;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    login VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(50) NOT NULL,
    role VARCHAR(20) NOT NULL DEFAULT 'utilisateur'
);

INSERT INTO users (login, password, role) VALUES
('adminweb', MD5('adminweb'), 'adminweb'),
('adminsys', MD5('adminsys'), 'adminsys');