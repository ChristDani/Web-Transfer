use Web_Transfer
go

-- creacion de triggers --

-- trigger para transaccion --

create trigger transaccion
	on operaciones
for insert
as
update t set t.monto=t.monto-o.monto from tarjeta as t inner join inserted as o on o.idtpop=2 and (o.origen=t.nmrcta or o.origen=t.nmrctait)
update t set t.monto=t.monto+o.monto from tarjeta as t inner join inserted as o on o.idtpop=2 and (o.destino=t.nmrcta or o.destino=t.nmrctait)

-- trigegr para pagos --

create trigger pagos
	on operaciones
for insert
as
update t set t.monto=t.monto-o.monto from tarjeta as t inner join inserted as o on o.idtpop=1 and (o.origen=t.nmrcta or o.origen=t.nmrctait)

-- trigegr para depositos --

create trigger depositos
	on operaciones
for insert
as
update t set t.monto=t.monto+o.monto from tarjeta as t inner join inserted as o on o.idtpop=3 and (o.destino=t.nmrcta or o.destino=t.nmrctait)

-- trigegr para retiros --

create trigger retiros
	on operaciones
for insert
as
update t set t.monto=t.monto-o.monto from tarjeta as t inner join inserted as o on o.idtpop=4 and (o.origen=t.nmrcta or o.origen=t.nmrctait)

-- pruebas --

-- transacciones --

declare @codigo char(9)
set @codigo = dbo.Genidop()
insert into operaciones(idop,idtpop,origen,destino,idtpmn,monto) values(@codigo,'2','12240514000000000004','04220000000002','1',4)

select * from tarjeta

-- pagos --

declare @codigo char(9)
set @codigo = dbo.Genidop()
insert into operaciones(idop,idtpop,origen,destino,idtpmn,monto) values(@codigo,'1','04220000000001','agua','1',20)

select * from tarjeta
select * from operaciones

-- depositos --

declare @codigo char(9)
set @codigo = dbo.Genidop()
insert into operaciones(idop,idtpop,origen,destino,idtpmn,monto) values(@codigo,'3','agente','04220000000001','1',2)

select * from tarjeta
select * from operaciones

-- retiros --

declare @codigo char(9)
set @codigo = dbo.Genidop()
insert into operaciones(idop,idtpop,origen,destino,idtpmn,monto) values(@codigo,'4','04220000000002','agente','1',10)

select * from tarjeta
select * from operaciones
