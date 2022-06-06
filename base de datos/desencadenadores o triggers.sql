use Web_Transfer
go

-- creacion de triggers --

-- trigger para transaccion --

create trigger transaccion_soles
	on operaciones
for insert
as
update t set t.monto=t.monto-o.monto from tarjeta as t inner join inserted as o on o.idtpop=2 and o.idtpmn=1 and t.idtpmn=1 and (o.origen=t.nmrcta or o.origen=t.nmrctait)
update t set t.monto=t.monto-(o.monto/3.8) from tarjeta as t inner join inserted as o on o.idtpop=2 and o.idtpmn=1 and t.idtpmn=2 and (o.origen=t.nmrcta or o.origen=t.nmrctait)
update t set t.monto=t.monto+o.monto from tarjeta as t inner join inserted as o on o.idtpop=2 and o.idtpmn=1 and t.idtpmn=1 and (o.destino=t.nmrcta or o.destino=t.nmrctait)
update t set t.monto=t.monto+(o.monto/3.8) from tarjeta as t inner join inserted as o on o.idtpop=2 and o.idtpmn=1 and t.idtpmn=2 and (o.destino=t.nmrcta or o.destino=t.nmrctait)

create trigger transaccion_dolar
	on operaciones
for insert
as
update t set t.monto=t.monto-o.monto from tarjeta as t inner join inserted as o on o.idtpop=2 and o.idtpmn=2 and t.idtpmn=2 and (o.origen=t.nmrcta or o.origen=t.nmrctait)
update t set t.monto=t.monto-(o.monto*3.8) from tarjeta as t inner join inserted as o on o.idtpop=2 and o.idtpmn=2 and t.idtpmn=1 and (o.origen=t.nmrcta or o.origen=t.nmrctait)
update t set t.monto=t.monto+o.monto from tarjeta as t inner join inserted as o on o.idtpop=2 and o.idtpmn=2 and t.idtpmn=2 and (o.destino=t.nmrcta or o.destino=t.nmrctait)
update t set t.monto=t.monto+(o.monto*3.6) from tarjeta as t inner join inserted as o on o.idtpop=2 and o.idtpmn=2 and t.idtpmn=1 and (o.destino=t.nmrcta or o.destino=t.nmrctait)

-- trigegr para pagos --

create trigger pagos_soles
	on operaciones
for insert
as
update t set t.monto=t.monto-o.monto from tarjeta as t inner join inserted as o on o.idtpop=1 and o.idtpmn=1 and t.idtpmn=1 and (o.origen=t.nmrcta or o.origen=t.nmrctait)
update t set t.monto=t.monto-(o.monto/3.8) from tarjeta as t inner join inserted as o on o.idtpop=1 and o.idtpmn=1 and t.idtpmn=2 and (o.origen=t.nmrcta or o.origen=t.nmrctait)

create trigger pagos_dolares
	on operaciones
for insert
as
update t set t.monto=t.monto-o.monto from tarjeta as t inner join inserted as o on o.idtpop=1 and o.idtpmn=2 and t.idtpmn=2 and (o.origen=t.nmrcta or o.origen=t.nmrctait)
update t set t.monto=t.monto-(o.monto*3.8) from tarjeta as t inner join inserted as o on o.idtpop=1 and o.idtpmn=2 and t.idtpmn=1 and (o.origen=t.nmrcta or o.origen=t.nmrctait)


-- trigegr para depositos --

create trigger depositos_soles
	on operaciones
for insert
as
update t set t.monto=t.monto+o.monto from tarjeta as t inner join inserted as o on o.idtpop=3 and o.idtpmn=1 and t.idtpmn=1 and (o.destino=t.nmrcta or o.destino=t.nmrctait)
update t set t.monto=t.monto+(o.monto/3.6) from tarjeta as t inner join inserted as o on o.idtpop=3 and o.idtpmn=1 and t.idtpmn=2 and (o.destino=t.nmrcta or o.destino=t.nmrctait)

create trigger depositos_dolares
	on operaciones
for insert
as
update t set t.monto=t.monto+o.monto from tarjeta as t inner join inserted as o on o.idtpop=3 and o.idtpmn=2 and t.idtpmn=2 and (o.destino=t.nmrcta or o.destino=t.nmrctait)
update t set t.monto=t.monto+(o.monto*3.6) from tarjeta as t inner join inserted as o on o.idtpop=3 and o.idtpmn=2 and t.idtpmn=1 and (o.destino=t.nmrcta or o.destino=t.nmrctait)

-- trigegr para retiros --

create trigger retiros_soles
	on operaciones
for insert
as
update t set t.monto=t.monto-o.monto from tarjeta as t inner join inserted as o on o.idtpop=4 and o.idtpmn=1 and t.idtpmn=1 and (o.origen=t.nmrcta or o.origen=t.nmrctait)
update t set t.monto=t.monto-(o.monto/3.6) from tarjeta as t inner join inserted as o on o.idtpop=4 and o.idtpmn=1 and t.idtpmn=2 and (o.origen=t.nmrcta or o.origen=t.nmrctait)

create trigger retiros_dolares
	on operaciones
for insert
as
update t set t.monto=t.monto-o.monto from tarjeta as t inner join inserted as o on o.idtpop=4 and o.idtpmn=2 and t.idtpmn=2 and (o.origen=t.nmrcta or o.origen=t.nmrctait)
update t set t.monto=t.monto-(o.monto*3.8) from tarjeta as t inner join inserted as o on o.idtpop=4 and o.idtpmn=2 and t.idtpmn=1 and (o.origen=t.nmrcta or o.origen=t.nmrctait)





-- pruebas --

-- transacciones --
	-- soles --
		-- de cuenta de soles a soles --
		declare @codigo char(9)
		set @codigo = dbo.Genidop()
		insert into operaciones(idop,idtpop,origen,destino,idtpmn,monto) values(@codigo,'2','04220000000001','04220000000002','1',4)

		select * from tarjeta

		-- de cuenta de soles a dolares --
		declare @codigo char(9)
		set @codigo = dbo.Genidop()
		insert into operaciones(idop,idtpop,origen,destino,idtpmn,monto) values(@codigo,'2','04220000000001','04220000000004','1',8)

		select * from tarjeta

		-- de cuenta de dolares a soles --
		declare @codigo char(9)
		set @codigo = dbo.Genidop()
		insert into operaciones(idop,idtpop,origen,destino,idtpmn,monto) values(@codigo,'2','04220000000004','04220000000001','1',3)

		select * from tarjeta

	-- dolares --
		-- de cuenta de dolares a dolares --
		declare @codigo char(9)
		set @codigo = dbo.Genidop()
		insert into operaciones(idop,idtpop,origen,destino,idtpmn,monto) values(@codigo,'2','04220000000003','04220000000004','2',0.02)

		select * from tarjeta

		-- de cuenta de soles a dolares --
		declare @codigo char(9)
		set @codigo = dbo.Genidop()
		insert into operaciones(idop,idtpop,origen,destino,idtpmn,monto) values(@codigo,'2','04220000000001','04220000000004','2',1)

		select * from tarjeta

		-- de cuenta de dolares a soles --
		declare @codigo char(9)
		set @codigo = dbo.Genidop()
		insert into operaciones(idop,idtpop,origen,destino,idtpmn,monto) values(@codigo,'2','04220000000004','04220000000001','2',1)

		select * from tarjeta

-- pagos --
	-- soles --
		-- de una cuenta de soles --
		declare @codigo char(9)
		set @codigo = dbo.Genidop()
		insert into operaciones(idop,idtpop,origen,destino,idtpmn,monto) values(@codigo,'1','04220000000002','agua','1',1)

		select * from tarjeta

		-- de una cuenta de dolares --
		declare @codigo char(9)
		set @codigo = dbo.Genidop()
		insert into operaciones(idop,idtpop,origen,destino,idtpmn,monto) values(@codigo,'1','04220000000003','agua','1',1)

		select * from tarjeta

	-- dolares --
		-- de una cuenta de soles --
		declare @codigo char(9)
		set @codigo = dbo.Genidop()
		insert into operaciones(idop,idtpop,origen,destino,idtpmn,monto) values(@codigo,'1','04220000000002','agua','2',1)

		select * from tarjeta

		-- de una cuenta de dolares --
		declare @codigo char(9)
		set @codigo = dbo.Genidop()
		insert into operaciones(idop,idtpop,origen,destino,idtpmn,monto) values(@codigo,'1','04220000000003','agua','2',1)

		select * from tarjeta

-- depositos --
	-- soles --
		-- a una cuenta de soles --
		declare @codigo char(9)
		set @codigo = dbo.Genidop()
		insert into operaciones(idop,idtpop,origen,destino,idtpmn,monto) values(@codigo,'3','agente','04220000000002','1',2)

		select * from tarjeta

		-- a una cuenta de dolares --
		declare @codigo char(9)
		set @codigo = dbo.Genidop()
		insert into operaciones(idop,idtpop,origen,destino,idtpmn,monto) values(@codigo,'3','agente','04220000000003','1',2)

		select * from tarjeta

	-- dolares --
		-- a una cuenta de dolares --
		declare @codigo char(9)
		set @codigo = dbo.Genidop()
		insert into operaciones(idop,idtpop,origen,destino,idtpmn,monto) values(@codigo,'3','agente','04220000000003','2',2)

		select * from tarjeta

		-- a una cuenta de soles --
		declare @codigo char(9)
		set @codigo = dbo.Genidop()
		insert into operaciones(idop,idtpop,origen,destino,idtpmn,monto) values(@codigo,'3','agente','04220000000002','2',2)

		select * from tarjeta

-- retiros --
	-- soles --
		-- de una cuenta de soles --
		declare @codigo char(9)
		set @codigo = dbo.Genidop()
		insert into operaciones(idop,idtpop,origen,destino,idtpmn,monto) values(@codigo,'4','04220000000002','agente','1',1)

		select * from tarjeta

		-- de una cuenta de dolares --
		declare @codigo char(9)
		set @codigo = dbo.Genidop()
		insert into operaciones(idop,idtpop,origen,destino,idtpmn,monto) values(@codigo,'4','04220000000003','agente','1',1)

		select * from tarjeta

	-- dolares --
		-- de una cuenta de dolares --
		declare @codigo char(9)
		set @codigo = dbo.Genidop()
		insert into operaciones(idop,idtpop,origen,destino,idtpmn,monto) values(@codigo,'4','04220000000003','agente','2',1)

		select * from tarjeta

		-- de una cuenta de soles --
		declare @codigo char(9)
		set @codigo = dbo.Genidop()
		insert into operaciones(idop,idtpop,origen,destino,idtpmn,monto) values(@codigo,'4','04220000000001','agente','2',1)

		select * from tarjeta
