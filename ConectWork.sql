CREATE DATABASE ConectWork;
use ConectWork;

create table contratante(
idContratante INT auto_increment primary key not null,
nomeContratante VARCHAR (45) not null,
logradouro VARCHAR (45) not null,
telefone VARCHAR (45) not null,
CNPJ VARCHAR (15) not null,
email VARCHAR (45) not null,
empresa VARCHAR (45) not null,


);


create table prestador(
idPrestador INT auto_increment primary key not null,
nomePrestador VARCHAR (45) not null,
logradouroPrest VARCHAR (45) not null,
telefonePrest VARCHAR (45) not null,
CPF VARCHAR (12) not null,
emailPrest VARCHAR (45) not null,
escolaridade VARCHAR (45) not null,
area  VARCHAR (25) not null

);


INSERT INTO prestador (idPrestador,nomePrestador, logradouroPrest,telefonePrest,CPF, emailPrest,escolaridade,area) VALUES ( 25,'ana', ' feira de santana rua são sebastião 247', '994521008', '55566677789','anacaroline@silva.com','ensino medio completo','vendedor');
INSERT INTO prestador (idPrestador,nomePrestador, logradouroPrest,telefonePrest,CPF, emailPrest,escolaridade,area) VALUES ( 61,'joana', ' rio de janeiro rua machado do assis 255', '992267791', '12365498703','joanaDark@gouveia.com','doutora em fisica','Docente');


INSERT INTO contratante (idContratante,nomeContratante,logradouro,telefone,CNPJ,email,empresa) VALUES ( 1,'Clara', ' Guanambi rua euclides da cunha 71', '34415751', '96352185475174','contrasil@finsh.com','contasil');
INSERT INTO contratante (idContratante,nomeContratante,logradouro,telefone,CNPJ,email,empresa) VALUES ( 2,'Lucia', ' São Paulo avenida paulista 551', '34414782', '24580198735269','sampaNet@finsh.com','SampaNet');
