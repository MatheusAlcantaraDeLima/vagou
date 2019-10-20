create  table preco (
    id_preco int  unsigned auto_increment not null,
    nome_estacio2 varchar(40) unique not null,
    preco_hora varchar(11),
    diario varchar(11),
    semanal varchar(11),
    mensal varchar(11),
    anual varchar(11),
    PRIMARY KEY (id_preco)
);

create table endereco (
    id_endereco int unsigned auto_increment not null,
    nome_estacio varchar (40) not null,
    CEP varchar (9) not null,
    bairro varchar (25) not null,
    rua varchar (50) not null ,  
    cidade varchar (25) not null,
    estado varchar (3) not null,
    PRIMARY KEY (id_endereco)
);

create table cliente (
    CPF varchar (14) unique not null,
    nome_client varchar(50) not null,
    senha_client varchar (20) not null,
    data__nasc date not null,
    email varchar(100) unique not null,
    PRIMARY KEY (CPF)
);

create table reservar (
    id_vaga int unsigned auto_increment ,
    data_entrada datetime not null,
    data_saida datetime not null,
    cpf_cliente varchar(11) not null,
    primary key (id_vaga),
    CONSTRAINT fk_cpf_cliente FOREIGN KEY (cpf_cliente) REFERENCES cliente (cpf)
);


CREATE TABLE estacionamento (
    id_estacio int unsigned auto_increment not null,
    nome_estacio VARCHAR (40) not null,
    CNPJ varchar (18) unique not null,
    senha_estacio VARCHAR (40) not null,
    id_endereco1 int unsigned not null,
    id_preco1 int unsigned not null,
    telefone varchar(15) not null,
    email_estacio varchar(100) unique not null,
    primary key (id_estacio),
    CONSTRAINT fk_id_endereco FOREIGN KEY (id_endereco1) REFERENCES endereco (id_endereco),
    CONSTRAINT fk_id_preco FOREIGN KEY (id_preco1) REFERENCES preco (id_preco)
);

teste
CREATE TABLE estacionamento (
    id_estacio int unsigned auto_increment not null,
    nome_estacio VARCHAR (40) not null,
    CNPJ varchar (18) unique not null,
    senha_estacio VARCHAR (40) not null,
    telefone varchar(15) not null,
    email_estacio varchar(100) unique not null,
    primary key (id_estacio)
);


-------------------------------------------------------------------------------- // -------------------------------------------------------------------------
insert into estacionamento (nome_estacio,CNPJ,senha_estacio,id_endereco1,id_preco1,telefone,email_estacio) values 

('agoravaidarcerto','123456789','123','11','1','264561','agoravaidarcerto@gmail.com');

