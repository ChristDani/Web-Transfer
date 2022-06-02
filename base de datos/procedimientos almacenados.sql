
use Web_Transfer
go

-- insesion de usuario --

create procedure sp_insertar_usuario
@tiduser char(9),
@tnombre char(25),
@tapellido char(25),
@tdni char(8),
@tsexo char(9),
@tcorreo varchar(50),
@tclave char(6)
as
begin
	insert into usuario(iduser,nombre,apellido,dni,sexo,correo,clave) values(@tiduser,@tnombre,@tapellido,@tdni,@tsexo,@tcorreo,@tclave)
end 
go

-- insersion de operacion --

create procedure sp_insertar_operacion
@tidop char(9),
@tidtpop char(1),
@torigen char(20),
@tdestino char(20),
@tidtpmn char(1),
@tmonto smallmoney
as
begin
	insert into operaciones(idop,idtpop,origen,destino,idtpmn,monto) values(@tidop,@tidtpop,@torigen,@tdestino,@tidtpmn,@tmonto)
end 
go

-- generador de tarjetas --

create procedure sp_generarTrj
@tnmrtj char(16),
@tiduser char(9),
@tclave char(4),
@tidtpct char(1),
@tidtpmn char(1),
@tnmrcta char(14),
@tnmrctait char(20)
as
begin
	insert into tarjeta(nmrtj,iduser,clave,idtpct,idtpmn,nmrcta,nmrctait) values(@tnmrtj,@tiduser,@tclave,@tidtpct,@tidtpmn,@tnmrcta,@tnmrctait)
end 
go

-- actualización de usuario --

create procedure sp_actualizar_usuario
@tiduser char(9),
@tcorreo varchar(50),
@ttelefono char(9),
@tclave char(6)
as
begin
	update usuario set correo=@tcorreo, telefono=@ttelefono, clave=@tclave  where iduser=@tiduser
end 
go

-- pruebas --

-- usuario --

-- insersion --
declare @codigo char(9)
set @codigo = dbo.Geniduser()
print @codigo;
exec sp_insertar_usuario @codigo,'Christian','Campaña','73179455','masculino','christian@gmail.com','745896'

select * from usuario

-- actualizacion --

exec sp_actualizar_usuario 'US0000004','Jmendoza@outlook.com','986514273','146325'

select * from usuario

-- operaciones --

declare @codigo char(9)
set @codigo = dbo.Genidop()
print @codigo;
exec sp_insertar_operacion @codigo,'1','','','1',50.0

select * from operaciones

-- tarjeta --

declare @nmrtrj char(16)
set @nmrtrj = dbo.Gennmrtrj()
print @nmrtrj;
declare @nmrcta char(14)
set @nmrcta = dbo.Gennmrcta()
print @nmrcta;
declare @nmrctait char(20)
set @nmrctait = dbo.Gennmrctait()
print @nmrctait;
exec sp_generarTrj @nmrtrj,'US0000001','8695','1','1',@nmrcta,@nmrctait

select * from tarjeta
