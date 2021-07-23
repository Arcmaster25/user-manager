CREATE TABLE user(
	id INT NOT NULL AUTO_INCREMENT,
	nombre VARCHAR(80) NOT NULL,
	contrasena VARCHAR(80) NOT NULL,
	PRIMARY KEY(id)
);

CREATE TABLE clients(
	clientId INT NOT NULL AUTO_INCREMENT,
	nombre VARCHAR(100) NOT NULL,
	cedula SMALLINT(6) NOT NULL,
	nombreComercial VARCHAR(150) NOT NULL,
	telefono SMALLINT(6) NOT NULL,
	direccion TEXT NOT NULL,
	representanteLegal VARCHAR(100) NOT NULL,
	cedulaRepresentanteLegal SMALLINT(6) NOT NULL,
	tiv VARCHAR(255),
	correoFE VARCHAR(100) NOT NULL,
	contrasenaFE VARCHAR(150) NOT NULL,
	userId INT,
	PRIMARY KEY(clientId),
	FOREIGN KEY(userId) REFERENCES user(id)
);

CREATE TABLE economicActivity(
	economicId INT NOT NULL AUTO_INCREMENT, 
	actividadEconomica VARCHAR(180) NOT NULL,
	codigoActividad SMALLINT(6) NOT NULL,
	userId INT,
	PRIMARY KEY(economicId),
	FOREIGN KEY(userId) REFERENCES user(id)
);

CREATE TABLE taxReturns(
	taxId INT NOT NULL AUTO_INCREMENT, 
	tipo VARCHAR(180) NOT NULL,
	periodo DATE NOT NULL,
	ano DATE NOT NULL,
	userId INT,
	PRIMARY KEY(taxId),
	FOREIGN KEY(userId) REFERENCES user(id)
);