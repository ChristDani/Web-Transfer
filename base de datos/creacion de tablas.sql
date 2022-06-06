use Web_Transfer
go 

-- tablas independientes --

create table tipo_op
(
idtpop char(1) primary key,
nombre char(15) not null
)

create table tipo_ct
(
idtpct char(1) primary key,
nombre char(15) not null
)

create table tipo_mn
(
idtpmn char(1) primary key,
nombre char(15) not null
)

create table usuario
(
iduser char(9) primary key,
nombre char(25) not null,
apellido char(25) not null,
dni char(8) unique,
sexo char(9) not null,
correo varchar(50) not null,
telefono char(9) null,
clave char(6) not null,
fechaRg smalldatetime default getdate(),

constraint chk_sexo CHECK (sexo in ('masculino','femenino')),
)

-- tablas dependientes --

create table operaciones
(
idop char(9) primary key,
idtpop char(1) not null,
origen char(20) not null,
destino char(20) not null,
idtpmn char(1) not null,
monto smallmoney not null,
fechaOp smalldatetime default getdate(),

constraint fk_idtpop foreign key(idtpop) references tipo_op(idtpop),
constraint fk_idtpmn foreign key(idtpmn) references tipo_mn(idtpmn)
)

create table tarjeta
(
nmrtj char(16) primary key,
iduser char(9) not null,
clave char(4) not null,
idtpct char(1) not null,
idtpmn char(1) not null,
nmrcta varchar(14) not null,
nmrctait char(20) not null,
monto smallmoney default 0.0,
fechaRgTrj smalldatetime default getdate(),

constraint fk_iduser foreign key(iduser) references usuario(iduser),
constraint fk_idtpct foreign key(idtpct) references tipo_ct(idtpct),
constraint fk_idtpmn2 foreign key(idtpmn) references tipo_mn(idtpmn)
)
