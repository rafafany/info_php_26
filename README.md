# info_php_26

ola 
- criação da branch dev
- criação de feature


MariaDB
CREATE database info_php_26;

CREATE USER 'aluno'@localhost IDENTIFIED BY '1234';

GRANT ALL PRIVILEGES ON *.* TO 'aluno'@localhost IDENTIFIED BY '1234';

https://phoenixnap.com/kb/how-to-create-mariadb-user-grant-privileges#:~:text=To%20create%20a%20new%20MariaDB, to%20a%20local%20MySQL%20server.

set session sql_mode = 'No_engine_substitution';

-- Retornar se o filtro for atendido select u.* from usuario as u inner join pessoa_fisica as pf ON u.id = pf.usuario_alteracao;

-- Retornar tudo(usuario + Pessoa_fisica) se encontrar -- senao retorna os dados de usuario select u.* from usuario as u left join pessoa_fisica as pf ON u.id = pf.usuario_alteracao;

-- Retornar tudo(Pessoa_fisica + usuario) se encontrar -- senao retorna os dados da Pessoa_fisica select u.* from usuario as u right join pessoa_fisica as pf ON u.id = pf.usuario_alteracao;