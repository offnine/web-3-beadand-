CREATE TABLE cars(
	id INT NOT NULL AUTO_INCREMENT,
    title VARCHAR(250) NOT NULL,
    slug VARCHAR(250) NOT NULL,
    text TEXT NOT NULL,
    company varchar(250) NOT NULL,
    car_engine VARCHAR(250) NOT NULL,
    
    CONSTRAINT PK_cars
    PRIMARY KEY(id),
    CONSTRAINT FK_company FOREIGN KEY(company) REFERENCES company(name),
    CONSTRAINT FK_car_engine FOREIGN KEY(car_engine) REFERENCES car_engine(name),
    CONSTRAINT UQ_cars_slug
    UNIQUE(slug)
    
);
CREATE TABLE company(
	id INT NOT NULL,
    name VARCHAR(250) NOT NULL
    
);
CREATE TABLE car_engine(
	id INT NOT NULL,
    name VARCHAR(250) NOT NULL,
    type VARCHAR(250) NOT NULL
);
CREATE TABLE user_login (
id int(11) NOT NULL AUTO_INCREMENT, 
user_name varchar(255) NOT NULL, 
user_email varchar(255) NOT NULL, 
user_password varchar(255) NOT NULL, 
admin INT(1) NOT NULL,
 PRIMARY KEY (`id`) )



/*INSERTS for SAMPLE*/
INSERT INTO cars(id,title,slug,text,company,car_engine)
VALUES(1,'Ford FOCUS','ford-focus',
'2004 -es évjáratú Ford Focus, JÓÓ MOTOR','Ford','Ford Focus SPORT 120le (DBC16K1),Benzin');

INSERT INTO cars(id,title,slug,text,company,car_engine)
VALUES(2,'Honda CRX','honda-crx',
'1993 as CRX vti swap, EGYEDI','Honda','B16A,Benzin');

INSERT INTO cars(id,title,slug,text,company,car_engine)
VALUES(3,'Opel ASTRA J','opel-astra-j',
'Kecesett futott új astra, nagyobbra váltás miatt eladó','Opel','Opel 1.6 Turbo, Benzin');

INSERT INTO cars(id,title,slug,text,company,car_engine)
VALUES(4,'BMW X6','bmw-m5',
'3.0 Diesel, nyomatékos motor, kuplungot cserélni kell + 3 éves nyári gumi','BMW','BMW 3.0 Turbo DIESEL');

INSERT INTO company(id,name)
VALUES(1,'Ford');

INSERT INTO car_engine(id,name,type)
VALUES(1,'Ford Focus SPORT 120le (DBC16K1)','Benzin');

INSERT INTO user_login(id,user_name,user_email,user_password,admin)
VALUES (1,'Sadmin','Sadmin@gmail.com','123','2')


/*RESET*/
Drop table cars;