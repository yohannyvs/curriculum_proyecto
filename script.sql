USE [master]
GO
/****** Object:  Database [Recursos_Humanos]    Script Date: 06/05/2017 18:45:58 ******/
CREATE DATABASE [Recursos_Humanos] ON  PRIMARY 
( NAME = N'Recursos_Humanos', FILENAME = N'C:\Program Files\Microsoft SQL Server\MSSQL10_50.MSSQLSERVER\MSSQL\DATA\Recursos_Humanos.mdf' , SIZE = 2304KB , MAXSIZE = UNLIMITED, FILEGROWTH = 1024KB )
 LOG ON 
( NAME = N'Recursos_Humanos_log', FILENAME = N'C:\Program Files\Microsoft SQL Server\MSSQL10_50.MSSQLSERVER\MSSQL\DATA\Recursos_Humanos_log.LDF' , SIZE = 576KB , MAXSIZE = 2048GB , FILEGROWTH = 10%)
GO
ALTER DATABASE [Recursos_Humanos] SET COMPATIBILITY_LEVEL = 100
GO
IF (1 = FULLTEXTSERVICEPROPERTY('IsFullTextInstalled'))
begin
EXEC [Recursos_Humanos].[dbo].[sp_fulltext_database] @action = 'enable'
end
GO
ALTER DATABASE [Recursos_Humanos] SET ANSI_NULL_DEFAULT OFF
GO
ALTER DATABASE [Recursos_Humanos] SET ANSI_NULLS OFF
GO
ALTER DATABASE [Recursos_Humanos] SET ANSI_PADDING OFF
GO
ALTER DATABASE [Recursos_Humanos] SET ANSI_WARNINGS OFF
GO
ALTER DATABASE [Recursos_Humanos] SET ARITHABORT OFF
GO
ALTER DATABASE [Recursos_Humanos] SET AUTO_CLOSE OFF
GO
ALTER DATABASE [Recursos_Humanos] SET AUTO_CREATE_STATISTICS ON
GO
ALTER DATABASE [Recursos_Humanos] SET AUTO_SHRINK OFF
GO
ALTER DATABASE [Recursos_Humanos] SET AUTO_UPDATE_STATISTICS ON
GO
ALTER DATABASE [Recursos_Humanos] SET CURSOR_CLOSE_ON_COMMIT OFF
GO
ALTER DATABASE [Recursos_Humanos] SET CURSOR_DEFAULT  GLOBAL
GO
ALTER DATABASE [Recursos_Humanos] SET CONCAT_NULL_YIELDS_NULL OFF
GO
ALTER DATABASE [Recursos_Humanos] SET NUMERIC_ROUNDABORT OFF
GO
ALTER DATABASE [Recursos_Humanos] SET QUOTED_IDENTIFIER OFF
GO
ALTER DATABASE [Recursos_Humanos] SET RECURSIVE_TRIGGERS OFF
GO
ALTER DATABASE [Recursos_Humanos] SET  ENABLE_BROKER
GO
ALTER DATABASE [Recursos_Humanos] SET AUTO_UPDATE_STATISTICS_ASYNC OFF
GO
ALTER DATABASE [Recursos_Humanos] SET DATE_CORRELATION_OPTIMIZATION OFF
GO
ALTER DATABASE [Recursos_Humanos] SET TRUSTWORTHY OFF
GO
ALTER DATABASE [Recursos_Humanos] SET ALLOW_SNAPSHOT_ISOLATION OFF
GO
ALTER DATABASE [Recursos_Humanos] SET PARAMETERIZATION SIMPLE
GO
ALTER DATABASE [Recursos_Humanos] SET READ_COMMITTED_SNAPSHOT OFF
GO
ALTER DATABASE [Recursos_Humanos] SET HONOR_BROKER_PRIORITY OFF
GO
ALTER DATABASE [Recursos_Humanos] SET  READ_WRITE
GO
ALTER DATABASE [Recursos_Humanos] SET RECOVERY FULL
GO
ALTER DATABASE [Recursos_Humanos] SET  MULTI_USER
GO
ALTER DATABASE [Recursos_Humanos] SET PAGE_VERIFY CHECKSUM
GO
ALTER DATABASE [Recursos_Humanos] SET DB_CHAINING OFF
GO
EXEC sys.sp_db_vardecimal_storage_format N'Recursos_Humanos', N'ON'
GO
USE [Recursos_Humanos]
GO
/****** Object:  Table [dbo].[Registro]    Script Date: 06/05/2017 18:45:59 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[Registro](
	[id_Registro] [int] NOT NULL,
	[Usuario] [varchar](15) NOT NULL,
	[Contrasena] [varchar](10) NOT NULL,
	[Rol] [char](1) NOT NULL,
PRIMARY KEY CLUSTERED 
(
	[id_Registro] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[informacion_laboral]    Script Date: 06/05/2017 18:45:59 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[informacion_laboral](
	[id_informacion_laboral] [int] NOT NULL,
	[cedula_usuario] [int] NOT NULL,
	[institucion_laboro] [varchar](50) NULL,
	[ano_ingreso] [int] NULL,
	[ano_salio] [int] NULL,
PRIMARY KEY CLUSTERED 
(
	[id_informacion_laboral] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[Informacion_General]    Script Date: 06/05/2017 18:45:59 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[Informacion_General](
	[Cedula] [int] NOT NULL,
	[Nombre] [varchar](25) NULL,
	[apellidos] [varchar](25) NULL,
	[Dirección] [varchar](100) NULL,
	[Teléfono] [int] NULL,
	[Correo] [varchar](20) NULL,
	[Nacionalidad] [varchar](15) NULL,
	[Fecha_de_nacimiento] [varchar](15) NULL,
	[Sexo] [char](1) NULL,
	[foto] [varchar](max) NULL,
PRIMARY KEY CLUSTERED 
(
	[Cedula] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[informacion_academica]    Script Date: 06/05/2017 18:45:59 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[informacion_academica](
	[id_informacion_academica] [int] NOT NULL,
	[cedula_usuario] [int] NOT NULL,
	[Institucion_Academica] [varchar](100) NULL,
	[Anno] [int] NULL,
	[curso] [varchar](100) NULL,
PRIMARY KEY CLUSTERED 
(
	[id_informacion_academica] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[curriculum]    Script Date: 06/05/2017 18:45:59 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[curriculum](
	[id_curriculum] [int] IDENTITY(1,1) NOT NULL,
	[id_informacion_laboral] [int] NULL,
	[id_informacion_academica] [int] NULL,
	[id_informacion_general] [int] NULL,
PRIMARY KEY CLUSTERED 
(
	[id_curriculum] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
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
