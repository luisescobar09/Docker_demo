
DROP TABLE IF EXISTS datos;
CREATE TABLE IF NOT EXISTS datos (
    id_persona INTEGER PRIMARY KEY AUTOINCREMENT,
    nombre VARCHAR(30),
    direccion VARCHAR(50),
    telefono CHAR(15)
);

INSERT INTO datos (nombre, direccion, telefono) VALUES ('Evelyn Jimenez','Av. Principal S/N La Providencia', '771-105-9137');
INSERT INTO datos (nombre, direccion, telefono) VALUES ('Mario Ivan salazar','Juárez 21, Avila Camacho', '771-741-9561');
INSERT INTO datos (nombre, direccion, telefono) VALUES ('Itzel Escobar','Lago Fontana 208, Bosques del Peñar', '771-204-1621');