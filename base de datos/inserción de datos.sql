
use Web_Transfer
go

-- insertar tipos de operaciones --

insert into tipo_op values('1','Pago'),('2','Transferencia'),('3','Deposito'),('4','Retiro')

select * from tipo_op

-- insertar tipos de cuentas --

insert into tipo_ct values('1','Credito'),('2','Debito')

select * from tipo_ct

-- insertar tipos de monedas --

insert into tipo_mn values('1','Soles'),('2','Dolares')

select * from tipo_mn
