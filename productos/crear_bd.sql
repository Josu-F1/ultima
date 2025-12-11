CREATE DATABASE IF NOT EXISTS utacuarto1;

USE utacuarto1;

CREATE TABLE IF NOT EXISTS PRODUCTOS (
    prodid INT AUTO_INCREMENT PRIMARY KEY,
    prodnombre VARCHAR(100),
    prodcantidad INT,
    prodprecio DECIMAL(10,2)
);


--------------------------------
CREATE TABLE CATEGORIA (
    cat_id INT AUTO_INCREMENT PRIMARY KEY,
    cat_nombre VARCHAR(100)
);

CREATE TABLE PRODUCTOS (
    prodid INT AUTO_INCREMENT PRIMARY KEY,
    prodnombre VARCHAR(100),
    prodcantidad INT,
    prodprecio DECIMAL(10,2),

    cat_id INT,
    FOREIGN KEY (cat_id) REFERENCES CATEGORIA(cat_id)
);
