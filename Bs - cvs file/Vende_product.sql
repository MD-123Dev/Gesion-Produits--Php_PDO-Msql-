

CREATE DATABASE vende;

use vende ;

create table products (
   
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT NOT NULL,
    product_name  varchar(70) NOT NULL,
    price INT NOT NULL ,
    category  varchar(100) NOT NULL
   
);