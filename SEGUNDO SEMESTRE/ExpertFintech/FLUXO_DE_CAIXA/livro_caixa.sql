CREATE DATABASe livro_caixa;

CREATE TABLE lc_cat (
  id int,
  nome varchar(255) ,
  PRIMARY KEY (id)
);

CREATE TABLE  lc_movimento (
  id int,
  tipo int,
  dia int,
  mes int,
  ano int,
  cat int,
  descricao text,
  valor float DEFAULT NULL,
  PRIMARY KEY (id)
);


insert into lc_cat (id,nome) values (1,'Pagamento');
insert into lc_cat (id,nome) values (2,'Entrada');



insert into lc_movimento(id,tipo,dia,mes,ano,cat,descricao,valor) values(1,2,12,04,2023,2,'Pagamento de dividas para amizade do parceiro max',34442);
insert into lc_movimento(id,tipo,dia,mes,ano,cat,descricao,valor) values(2,3,12,04,2023,3,'Pagamento de dividas para amizade do parceiro max',6000);
insert into lc_movimento(id,tipo,dia,mes,ano,cat,descricao,valor) values(3,1,13,04,2023,4,'Pagamento de dividas para amizade do parceiro max',332);
insert into lc_movimento(id,tipo,dia,mes,ano,cat,descricao,valor) values(4,3,14,04,2023,5,'Imposto de renda',495834);
insert into lc_movimento(id,tipo,dia,mes,ano,cat,descricao,valor) values(5,3,27,04,2023,1,'Pagamento de dividas para amizade do parceiro max',3654);
insert into lc_movimento(id,tipo,dia,mes,ano,cat,descricao,valor) values(6,2,01,05,2023,1,'Pagamento de pix para o agiota',10000);
insert into lc_movimento(id,tipo,dia,mes,ano,cat,descricao,valor) values(7,1,25,05,2023,1,'Pagamento de dividas para amizade do parceiro max',6704);
insert into lc_movimento(id,tipo,dia,mes,ano,cat,descricao,valor) values(8,1,25,05,2023,2,'Recebimento de dividas',9968);
insert into lc_movimento(id,tipo,dia,mes,ano,cat,descricao,valor) values(9,1,25,05,2023,2,'Recebimento de clientes',3493);
insert into lc_movimento(id,tipo,dia,mes,ano,cat,descricao,valor) values(10,1,25,05,2023,2,'Reembolso do fornecedor',10293);
insert into lc_movimento(id,tipo,dia,mes,ano,cat,descricao,valor) values(11,1,25,05,2023,2,'Vendas do dia',1049);





select* from lc_cat;
select * from lc_movimento;