-- 1.- Creamos la Base de Datos
create database share DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
-- Seleccionamos la base de datos "share"
use share;
-- 2.- Creamos las tablas
-- 2.1.1.- Tabla usuarios
create table if not exists usuarios(
 id int auto_increment primary key,
 nombre varchar(12) not null UNIQUE,
 password varbinary(15) not null,
 email varchar(30),
 foto_perfil varchar(255) UNIQUE
);

-- 2.1.2 .- Tabla mensajes
create table if not exists mensajes(
 id int auto_increment primary key,
 asunto varchar(256)null,
 texto LONGTEXT  null,
 idDesti int not null,
 nomDesti varchar(256) not null,
 idRemi int not null,
 nomRemi varchar(256) not null,
 adjunto varchar(256) null,
 leido BOOLEAN DEFAULT FALSE,
 fechaEnvio DATETIME not null,
 hilo VARCHAR(256) NULL,
 constraint fk_msj_dest foreign key(idDesti) references usuarios(id) on update
cascade on delete cascade,
 constraint fk_msj_remi foreign key(idRemi) references usuarios(id) on update
cascade on delete cascade 
);

create table if not exists papelera(
id int auto_increment primary key,
 asunto varchar(256)null,
 texto LONGTEXT  null,
 idDesti int not null,
 nomDesti varchar(256) not null,
 idRemi int not null,
 nomRemi varchar(256) not null,
 adjunto varchar(256) null,
 leido BOOLEAN DEFAULT FALSE,
 fechaEnvio DATETIME not null,
 hilo VARCHAR(256) NULL,
 constraint fk_msj_destPap foreign key(idDesti) references usuarios(id) on update
cascade on delete cascade,
 constraint fk_msj_remiPap foreign key(idRemi) references usuarios(id) on update
cascade on delete cascade 
);

create table if not exists enviados(
id int auto_increment primary key,
 asunto varchar(256)null,
 texto LONGTEXT  null,
 idDesti int not null,
 nomDesti varchar(256) not null,
 idRemi int not null,
 nomRemi varchar(256) not null,
 adjunto varchar(256) null,
 leido BOOLEAN DEFAULT FALSE,
 fechaEnvio DATETIME not null,
 hilo VARCHAR(256) NULL,
 constraint fk_msj_destEnv foreign key(idDesti) references usuarios(id) on update
cascade on delete cascade,
 constraint fk_msj_remiEnv foreign key(idRemi) references usuarios(id) on update
cascade on delete cascade 
);

--

-- --------------------------------------------------------
-- 2.1.3.- Tabla materiales
create table if not exists materiales(
 id int auto_increment primary key,
 propietario int not null,
 descripcion TEXT not null,
 foto varchar(255),
 constraint fk_mate_prop foreign key(propietario) references usuarios(id) on update
cascade on delete cascade
);

