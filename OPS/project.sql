create database wplproject ;
use wplproject;

select * from login;
CREATE TABLE  login  (
   UserName  varchar(50) NOT NULL,
   Password  varchar(16) NOT NULL,
  UNIQUE KEY  UserName  ( UserName )
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
insert  into login (UserName,Password) values ('admin','password');

select * from userdata;
CREATE TABLE  userdata  (
   userId  varchar(20) NOT NULL ,
   userFirstName  varchar(20) NOT NULL,
   userLastName  varchar(20) NOT NULL,
   userEmail  varchar(50) NOT NULL,
   userAddress  varchar(150) NOT NULL,
   userContactNumber  varchar(10) NOT NULL DEFAULT  0 ,
   userGender  varchar(1) NOT NULL DEFAULT  0 ,
   userdob  date NOT NULL,
  PRIMARY KEY ( userId ),
  UNIQUE KEY  userId  ( userId ),
  UNIQUE KEY  userEmail  ( userEmail )
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

select * from type;
CREATE TABLE  type  (
   typeId  varchar(20) NOT NULL ,
   typeDescription  varchar(20) NOT NULL,
  PRIMARY KEY ( typeId )
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

select * from pizza;
drop table pizza;
Create table  pizza (
 pizzaId  varchar(20),
 pizzaName varchar(50),
 pizzaDescription  varchar(1000),
 basePrice  varchar(20),
PRIMARY KEY( pizzaId )
);


select * from drinkType;
drop table drinkType;
Create table  drinkType (
 drinkId  varchar(20),
 drinkName varchar(200),
 drinkDescription  varchar(1000),
 drinkPrice  varchar(20),
PRIMARY KEY( drinkId )
);

select * from desertType;
Create table  desertType (
 desertId  varchar(20),
 dessertName varchar(200),
 desertDescription  varchar(1000),
 desertPrice  varchar(20),
PRIMARY KEY( desertId )
);
DROP TABLE deserttype;


select * from products;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_code` varchar(60) NOT NULL,
  `product_name` varchar(60) NOT NULL,
  `product_desc` tinytext NOT NULL,
  `product_img_name` varchar(60) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `product_code` (`product_code`)
) AUTO_INCREMENT=1 ;

select * from searchengine;
Create table searchengine(
id  int(11),
 title  varchar(100),
 description  text,
 url  text,
 keywords  varchar(100),
PRIMARY KEY( id )
);


select * from orders;
Create table  orders  (
 orderId  varchar(20) NOT NULL,
 userName  varchar(20) NOT NULL,
 dates  date NOT NULL,		
 item varchar(20),
PRIMARY KEY (orderId)
);


Create table  billing (
 billingId  varchar(20) NOT NULL,
 userId  varchar(20) NOT NULL,
 orderId  varchar(20) ,
 totalPrice  varchar(20),
PRIMARY KEY( billingId )
);