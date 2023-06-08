create database n8_projetofilme;
use n8_projetofilme;

create table usuario
(
	id_usuario int not null auto_increment primary key,
	nome_usuario varchar(50) not null  ,
	nascimento_usuario datetime not null  ,
	cadastro_usuario timestamp not null  ,
	usuario_usuario varchar(50) not null unique ,
	senha_usuario varchar(50) not null  ,
	img_usuario longblob not null  ,
	obs_usuario varchar(255) null  ,
	status_usuario varchar(30) not null  
);

select * from usuario;

create table categoria
(
	id_categoria int not null auto_increment primary key ,
	nome_categoria varchar(50) not null ,
	descricao_categoria varchar(200) null ,
	obs_categoria varchar(255) null ,
	status_categoria varchar(30) not null 
);

select * from categoria;



create table filme
(
	id_filme int not null auto_increment primary key ,
    id_categoria_filme int not null,
	nome_filme varchar(50) not null,
	img_filme longblob not null  ,
	sinopse_filme varchar(300) not null,
	nota_filme int not null,
	obs_filme varchar(200) null,
	status_filme varchar(20) not null,
    
    Constraint FK_ID_Categoria_Filme foreign key(id_categoria_filme) references categoria(id_categoria)
);

alter table filme
modify column sinopse_filme varchar(5000) not null;


select * from categoria;
select * from filme;


select filme.*, categoria.nome_categoria from filme inner join categoria on categoria.id_categoria = filme.id_categoria_filme WHERE filme.id_filme = 12;

select * from filme where id_filme = 21
