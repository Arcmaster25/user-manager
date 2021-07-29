CREATE TABLE user(
	id INT NOT NULL AUTO_INCREMENT,
	nombre VARCHAR(80) NOT NULL,
	contrasena VARCHAR(80) NOT NULL,
	PRIMARY KEY(id)
);

CREATE TABLE permits(
	permitsId INT NOT NULL AUTO_INCREMENT,
	tipo VARCHAR(20) NOT NULL,
	userId INT,
	PRIMARY KEY(permitsId),
	FOREIGN KEY(userId) REFERENCES user(id)
);

CREATE TABLE clients(
	clientId INT NOT NULL AUTO_INCREMENT,
	nombre VARCHAR(100) NOT NULL,
	cedula BIGINT NOT NULL,
	cedulaATV VARCHAR(200) NOT NULL,
	nombreComercial VARCHAR(150) NOT NULL,
	telefono BIGINT NOT NULL,
	direccion TEXT NOT NULL,
	regimen VARCHAR(255) NOT NULL,
	nota TEXT NOT NULL,
	representanteLegal VARCHAR(100) NOT NULL,
	cedulaRepresentanteLegal BIGINT NOT NULL,
	tivUrl VARCHAR(255),
	correoFE VARCHAR(100) NOT NULL,
	contrasenaFE VARCHAR(150) NOT NULL,
	contrasenaATV VARCHAR(200) NOT NULL,
	PRIMARY KEY(clientId)
);

CREATE TABLE taxReturns(
	taxId INT NOT NULL AUTO_INCREMENT,
	tipo VARCHAR(255),
	tiempo VARCHAR(255),
	url VARCHAR(255),
	clientId INT,
	PRIMARY KEY(taxId),
	FOREIGN KEY(clientId) REFERENCES clients(clientId)
);