use master
go

create database Web_Transfer
on
(
name=Web_Transfer_dat,
filename='E:\bases de datos\Web-Transfer\Web-Transfer.mdf',
size=10,
maxsize=50,
filegrowth=5
)
log on 
(
name=Web_Transfer_log,
filename='E:\bases de datos\Web-Transfer\Web-Transfer.ldf',
size=5mb,
maxsize=25mb,
filegrowth=5mb
)
go