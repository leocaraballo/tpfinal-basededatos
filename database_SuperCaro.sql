CREATE DATABASE IF NOT EXISTS SuperCaro;

use supercaro;

CREATE TABLE IF NOT EXISTS Empresa_Proveedora(
	RNE int PRIMARY KEY,
    CUIT int UNIQUE,
    Nombre varchar(150),
    Direccion varchar(150),
    Telefono bigint,
    Email varchar(255)
);

CREATE TABLE IF NOT EXISTS Marco_Regulatorio(
	Numero int PRIMARY KEY,
    Duracion_Dias int,
    Temperatura_Minima int,
    Temperatura_Maxima int
);

CREATE TABLE IF NOT EXISTS Producto(
	Codigo int PRIMARY KEY,
    Empresa_Proveedora_RNE_FK int,
    Marco_Regulatorio_Numero_FK int,
    RNPA int,
    Nombre varchar(100),
    Marca varchar(100),
    Descripcion varchar(150),
    FOREIGN KEY (Empresa_Proveedora_RNE_FK) REFERENCES Empresa_Proveedora(RNE),
    FOREIGN KEY (Marco_Regulatorio_Numero_FK) REFERENCES Marco_Regulatorio(Numero)
);

CREATE TABLE IF NOT EXISTS Categoria(
	Nombre varchar(100) PRIMARY KEY
);

CREATE TABLE IF NOT EXISTS Pertenece_A(
	Categoria_Nombre_FK varchar(100),
    Producto_Codigo_FK int,
    -- Clave primaria compuesta
    PRIMARY KEY(Categoria_Nombre_FK, Producto_Codigo_FK),
    FOREIGN KEY (Categoria_Nombre_FK) REFERENCES Categoria(Nombre),
    FOREIGN KEY (Producto_Codigo_FK) REFERENCES Producto(Codigo)
);

CREATE TABLE if NOT EXISTS Lote(
	Numero int PRIMARY KEY,
	Producto_Codigo_FK int,
    Fecha_Emision date,
    Fecha_Entrada date,
    Fecha_Vcto date,
    Cantidad int,
    -- Se agrego una FK a Producto
    FOREIGN KEY(Producto_Codigo_FK) REFERENCES Producto(Codigo)
);

CREATE TABLE IF NOT EXISTS Unidad_Venta(
    Codigo int PRIMARY KEY,
	Producto_Codigo_FK int,
    Lote_Numero_FK int,
    Envase_Paquete varchar(100),
    Envase_Material varchar(100),
    Peso int,
    Volumen int,
    Fecha_Retiro date,
    Descripcion_Extra varchar(150),
    FOREIGN KEY (Producto_Codigo_FK) REFERENCES Producto(Codigo),
    FOREIGN KEY (Lote_Numero_FK) REFERENCES Lote(Numero)
);

CREATE TABLE IF NOT EXISTS Tecnico(
	Dni int PRIMARY key,
    Matricula int UNIQUE,
    Nombre varchar(100),
    Apellido varchar(50),
    Telefono bigint,
    Direccion varchar(150)
);

CREATE TABLE IF NOT EXISTS Ficha_Control(
	Numero int PRIMARY KEY,
    Tecnico_Dni_FK int,
    Lote_Numero_FK int,
    -- Se calcula cuando se inserta
    Semana int,
    Año year,
    Estado_Lote varchar(50),
    Observaciones_Generales varchar(150),
    FOREIGN KEY (Tecnico_Dni_FK) REFERENCES Tecnico(Dni),
    FOREIGN KEY (Lote_Numero_FK) REFERENCES Lote(Numero)
);

CREATE TABLE IF NOT EXISTS Tipo_Verificacion(
	Nombre varchar(150) PRIMARY KEY,
    Tipo varchar(50)
);

CREATE TABLE IF NOT EXISTS Tiene(
	Marco_Regulatorio_Numero_FK int,
    Tipo_Verificacion_Nombre_FK varchar(150),
    PRIMARY KEY (Marco_Regulatorio_Numero_FK, Tipo_Verificacion_Nombre_FK),
    FOREIGN KEY (Marco_Regulatorio_numero_FK) REFERENCES Marco_Regulatorio(Numero),
    FOREIGN KEY (Tipo_Verificacion_Nombre_FK) REFERENCES Tipo_Verificacion(Nombre)
);

CREATE TABLE IF NOT EXISTS Verificacion(
	Numero int PRIMARY KEY AUTO_INCREMENT,
    Ficha_control_Numero_FK int,
    Tipo_Verificacion_Nombre_FK varchar(150),
    Fecha date,
    Hora time,
    Resultado int,
    -- 1 = se cumple, 0 = no se cumple
    Cumple tinyint,
    FOREIGN KEY (Ficha_control_Numero_FK) REFERENCES Ficha_Control(Numero),
    FOREIGN KEY (Tipo_Verificacion_Nombre_FK) REFERENCES Tipo_Verificacion(Nombre)
);