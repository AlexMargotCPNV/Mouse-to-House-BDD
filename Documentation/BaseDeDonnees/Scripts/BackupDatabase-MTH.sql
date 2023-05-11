-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.9.2-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- Author:								João Carvalho Santos
-- Date:									May 2023
-- --------------------------------------------------------

USE mth
GO

--Full backup
BACKUP DATABASE mth
TO DISK = 'C:\Program Files\Microsoft SQL Server\MSSQL15.MSSQLSERVER_JCS\MSSQL\Backup\BackupDatabase_MouseToHouse.BAK'
GO

--Differential backup
BACKUP DATABASE mth 
TO DISK = 'C:\Program Files\Microsoft SQL Server\MSSQL15.MSSQLSERVER_JCS\MSSQL\Backup\BackupDatabase_MouseToHouseDifferential.BAK' 
WITH DIFFERENTIAL 
GO
 
--Log backup
BACKUP LOG mth
TO DISK = 'C:\Program Files\Microsoft SQL Server\MSSQL15.MSSQLSERVER_JCS\MSSQL\Backup\BackupDatabase_MouseToHouse.TRN'
GO