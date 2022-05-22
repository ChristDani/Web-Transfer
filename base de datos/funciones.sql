
use Web_Transfer
go

-- generacion de id --

-- iduser --

create function dbo.Geniduser() returns char(9)
as begin
	declare @Codigo char(9)
	declare @Cant int
		set @Cant =(select count (*) from usuario)
		if @Cant=0
			set @Codigo='US0000001'
		else 
			begin
				set @Codigo=(select Max(Substring(iduser,3,7))from usuario)
				set @Codigo='US'+Right('0000000'+Cast (Cast (@Codigo as int )+1 as varchar(7)),7)
			end 
	return @Codigo
end 
go

-- idop --

create function dbo.Genidop() returns char(9)
as begin
	declare @Codigo char(9)
	declare @Cant int
		set @Cant =(select count (*) from operaciones)
		if @Cant=0
			set @Codigo='OP0000001'
		else 
			begin
				set @Codigo=(select Max(Substring(idop,3,7))from operaciones)
				set @Codigo='OP'+Right('0000000'+Cast (Cast (@Codigo as int )+1 as varchar(7)),7)
			end 
	return @Codigo
end 
go

-- gereración de número de tarjeta --

create function dbo.Gennmrtrj() returns char(16)
as begin
	declare @Codigo char(16)
	declare @Cant int
		set @Cant =(select count (*) from tarjeta)
		if @Cant=0
			set @Codigo='2334000000000001'
		else 
			begin
				set @Codigo=(select Max(Substring(nmrtj,5,12))from tarjeta)
				set @Codigo='2334'+Right('000000000000'+Cast (Cast (@Codigo as int )+1 as varchar(12)),12)
			end 
	return @Codigo
end 
go

-- generación de número de cuenta --

create function dbo.Gennmrcta() returns char(14)
as begin
	declare @Codigo char(14)
	declare @Cant int
		set @Cant =(select count (*) from tarjeta)
		if @Cant=0
			set @Codigo='04220000000001'
		else 
			begin
				set @Codigo=(select Max(Substring(nmrcta,5,10))from tarjeta)
				set @Codigo='0422'+Right('0000000000'+Cast (Cast (@Codigo as int )+1 as varchar(10)),10)
			end 
	return @Codigo
end 
go

-- generación de número de cuenta interbancaria --

create function dbo.Gennmrctait() returns char(20)
as begin
	declare @Codigo char(20)
	declare @Cant int
		set @Cant =(select count (*) from tarjeta)
		if @Cant=0
			set @Codigo='12240514000000000001'
		else 
			begin
				set @Codigo=(select Max(Substring(nmrctait,9,12))from tarjeta)
				set @Codigo='12240514'+Right('000000000000'+Cast (Cast (@Codigo as int )+1 as varchar(12)),12)
			end 
	return @Codigo
end 
go




-- pruebas --

-- usuario --

declare @codigo char(9)
set @codigo = dbo.Geniduser()
print @codigo;
insert into usuario(iduser,nombre,apellido,dni,sexo,correo,clave) values(@codigo,'jose','mendoza','75756556','masculino','jose@gmail.com','154251')


select * from usuario
delete from usuario

-- operaciones --

declare @codigo char(9)
set @codigo = dbo.Genidop()
print @codigo;
insert into operaciones(idop,idtpop,origen,destino,idtpmn,monto) values(@codigo,1,'','',1,0.0)

select * from operaciones
delete from operaciones

-- número y cuentas de tarjeta de tarjeta --

-- número de tarjeta --
declare @nmrtrj char(16)
set @nmrtrj = dbo.Gennmrtrj()
print @nmrtrj;
-- número de cuenta --
declare @nmrcta char(14)
set @nmrcta = dbo.Gennmrcta()
print @nmrcta;
-- número de cuenta interbancaria --
declare @nmrctait char(20)
set @nmrctait = dbo.Gennmrctait()
print @nmrctait;

insert into tarjeta(nmrtj,iduser,clave,idtpct,idtpmn,nmrcta,nmrctait) values(@nmrtrj,'US0000001','1542',1,1,@nmrcta,@nmrctait)


select * from tarjeta
delete from tarjeta