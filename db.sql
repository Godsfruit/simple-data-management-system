CREATE DATABASE data_system;

USE data_system;

CREATE TABLE records (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    location VARCHAR(100),
    data_value VARCHAR(100),
    date_created TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
