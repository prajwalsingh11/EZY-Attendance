-- Create database if not exists
CREATE DATABASE IF NOT EXISTS att;

-- Use the database
USE att;

-- Create the admin table
CREATE TABLE IF NOT EXISTS admin (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(255) NOT NULL,
    username VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    phone VARCHAR(20) NOT NULL,
    faculty VARCHAR(100)
);

-- Insert data into the admin table
INSERT INTO admin (full_name, username, password, email, phone, faculty) 
VALUES ('Kishnu Kumar Yadav', 'krrish9783', '6136', 'kishnuyadav783@gmail.com', '9173551395', 'BCA');
