
--database name = "sed";
--user ="root";
--creating tables;
--CREATE database sed;

CREATE TABLE usuario(
id TINYINT AUTO_INCREMENT,
user VARCHAR(40)NOT NULL,
pssw VARCHAR(255) NOT NULL,
estado BOLEAN NOT NULL,
CONSTRAINT PK_formulario PRIMARY KEY (id)
);


CREATE TABLE cliente(
id TINYINT AUTO_INCREMENT,
passp_user VARCHAR(20) NOT NULL,
name_user VARCHAR (20) NOT NULL,
age_user TINYINT NOT NULL,
citi_user VARCHAR (20) NOT NULL,
phone_user VARCHAR (15) NOT NULL,
pais_origen VARCHAR (20) NOT NULL,
pais_llegada VARCHAR(20) NOT NULL,
fecha_reg DATE NOT NULL,
hora_vuelo TIME NOT NULL,
asiento VARCHAR(5) NOT NULL,
precio FLOAT NOT NULL,
clase VARCHAR(20) NOT NULL,
CONSTRAINT PK_formulario PRIMARY KEY (id)
);

--insert for users
INSERT INTO usuario(user, pssw, estado) VALUES ('Managermike@gmail.com',SHA2('KimbaShat2903**',256),1);--cader
INSERT INTO usuario(user, pssw, estado) VALUES ('someone@skype.com',SHA2('SeKimbaShatter2903*',256),0);--prueba
INSERT INTO usuario(user, pssw, estado) VALUES ('spykeprincipal@workspace.com',SHA2('RGahSB31!!',256),1);--alexis
INSERT INTO usuario(user, pssw, estado) VALUES ('rojk_jin12@gmail.com',SHA2('userootseguridad22!*',256),0);--prueba
INSERT INTO usuario(user, pssw, estado) VALUES ('executivechief@gmail.com',SHA2('imthe2020manger!',256),1);--guillermo
INSERT INTO usuario(user, pssw, estado) VALUES ('flash__qr3@yahoo.com',SHA2('SeKimbahatter2903*',256),0);--prueba