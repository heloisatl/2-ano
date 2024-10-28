Adicionar um atributo: ADD atributo tipo de dados para o atributo;
ALTER TABLE medico ADD crm int;

Remover um atributo: DROP atributo;
ALTER TABLE medico DROP crm;

Alterar o nome de um atributo: CHANGE atributo antigo novo atributo tipo
de dados para novo atributo;
ALTER TABLE medico CHANGE cidade cidadeNasc varchar(20);

Alterar o tipo de dados de uma atributo: MODIFY “atributo" "novo tipo de
dados para o atributo“.
ALTER TABLE paciente MODIFY cpf varchar(11);

Também podemos adicionar Chaves Primárias e Estrangeiras depois
que as tabelas forem criadas.
o
ALTER TABLE Cliente ADD PRIMARY KEY (CodReferencia);
ALTER TABLE Pedidos ADD FOREIGN KEY (CodReferencia)
REFERENCES Cliente (CodReferencia);

Apagar a tabela paciente.
(Ops… cuidado com a Restrição de Integridade Referencial!)
o DROP TABLE <nome_da_tabela>;
DROP TABLE paciente; 

DROP DATABASE <nome_do_banco>;
DROP DATABASE clinica; Cuidado! Esta operação é irreversível
