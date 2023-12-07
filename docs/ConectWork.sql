CREATE DATABASE ConectWork;
use ConectWork;

create table contratante(
idContratante INT auto_increment primary key not null,
nomeContratante VARCHAR (45) not null,
empresa VARCHAR (45) not null,
CNPJ VARCHAR (15) not null,
emailcont VARCHAR (45) not null,
telefoneCont VARCHAR (45) not null,
logradouroCont VARCHAR (45) not null,
senhaC VARCHAR (60) not null

);


create table prestador(
idPrestador INT auto_increment primary key not null,
nomePrestador VARCHAR (45) not null,
CPF VARCHAR (12) not null,
emailPrest VARCHAR (45) not null,
area  VARCHAR (25) not null,
escolaridade VARCHAR (45) not null,
telefonePrest VARCHAR (45) not null,
logradouroPrest VARCHAR (45) not null,
senhaP VARCHAR (60) not null
);


INSERT INTO prestador (idPrestador,nomePrestador,CPF,emailPrest,area,escolaridade,telefonePrest,logradouroPrest,senhaP) VALUES ( 25,'ana', '55566677789','anacaroline@silva.com','vendedor','ensino medio completo','994521008',' feira de santana rua são sebastião 247','2530'  );
INSERT INTO prestador (idPrestador,nomePrestador,CPF,emailPrest,area,escolaridade,telefonePrest,logradouroPrest,senhaP)VALUES ( 61,'joana', '12365498703','joanaDark@gouveia.com','Docente', 'doutora em fisica','992267791', 'rio de janeiro rua machado do assis 255','5544');


INSERT INTO contratante (idContratante,nomeContratante,empresa,CNPJ,email,,telefone,logradouro,senhaC) VALUES ( 1,'Clara','contasil', '96352185475174','contrasil@finsh.com', '34415751',' Guanambi rua euclides da cunha 71','34489' );
INSERT INTO contratante (idContratante,nomeContratante,empresa,CNPJ,email,,telefone,logradouro,senhaC)  VALUES ( 2,'Lucia', 'SampaNet','24580198735269','sampaNet@finsh.com','34414782',' São Paulo avenida paulista 551','33568' );
