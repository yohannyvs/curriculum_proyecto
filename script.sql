USE [master]

CREATE DATABASE Recursos_Humanos

USE Recursos_Humanos

CREATE TABLE Registro(
	id_Registro int NOT NULL,
	Usuario varchar(15) NOT NULL,
	Contrasena varchar(10) NOT NULL,
	Rol char(1) NOT NULL,
)

CREATE TABLE informacion_laboral(
	id_informacion_laboral int NOT NULL,
	cedula_usuario int NOT NULL,
	institucion_laboro varchar(50) NULL,
	puesto varchar(50) NULL,
	ano_ingreso int NULL,
	ano_salio int NULL,
)

CREATE TABLE Informacion_General(
	Cedula int NOT NULL,
	Nombre varchar(25) NULL,
	Apellidos varchar(25) NULL,
	Direccion varchar(100) NULL,
	Telefono int NULL,
	Correo varchar(20) NULL,
	Nacionalidad varchar(15) NULL,
	Fecha_de_nacimiento varchar(15) NULL,
	Sexo char(1) NULL,
	Foto varchar(max) NULL,
)

CREATE TABLE informacion_academica(
	id_informacion_academica int NOT NULL,
	cedula_usuario int NOT NULL,
	Institucion_Academica varchar(100) NULL,
	Anno int NULL,
	curso varchar(100) NULL,
)

CREATE TABLE curriculum(
	id_curriculum int IDENTITY(1,1) NOT NULL,
	id_informacion_laboral int NULL,
	id_informacion_academica int NULL,
	id_informacion_general int NULL,
)

/****** Object:  ForeignKey [FK_curriculum_informacion_academica]    Script Date: 06/05/2017 18:45:59 ******/
ALTER TABLE [dbo].[curriculum]  WITH CHECK ADD  CONSTRAINT [FK_curriculum_informacion_academica] FOREIGN KEY([id_informacion_academica])
REFERENCES [dbo].[informacion_academica] ([id_informacion_academica])
GO
ALTER TABLE [dbo].[curriculum] CHECK CONSTRAINT [FK_curriculum_informacion_academica]
GO
/****** Object:  ForeignKey [FK_curriculum_Informacion_General]    Script Date: 06/05/2017 18:45:59 ******/
ALTER TABLE [dbo].[curriculum]  WITH CHECK ADD  CONSTRAINT [FK_curriculum_Informacion_General] FOREIGN KEY([id_informacion_general])
REFERENCES [dbo].[Informacion_General] ([Cedula])
GO
ALTER TABLE [dbo].[curriculum] CHECK CONSTRAINT [FK_curriculum_Informacion_General]
GO
/****** Object:  ForeignKey [FK_curriculum_informacion_laboral]    Script Date: 06/05/2017 18:45:59 ******/
ALTER TABLE [dbo].[curriculum]  WITH CHECK ADD  CONSTRAINT [FK_curriculum_informacion_laboral] FOREIGN KEY([id_informacion_laboral])
REFERENCES [dbo].[informacion_laboral] ([id_informacion_laboral])
GO
ALTER TABLE [dbo].[curriculum] CHECK CONSTRAINT [FK_curriculum_informacion_laboral]
GO
