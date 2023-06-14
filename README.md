# Projeto de Formulário de Contato

Este projeto consiste em um formulário de contato web que permite aos usuários enviarem suas informações de contato e mensagens por meio de um formulário online. Os dados enviados são armazenados em um banco de dados para posterior consulta.

## Funcionalidades

- O formulário de contato permite que os usuários insiram seu nome, endereço de e-mail e mensagem.
- Os dados inseridos no formulário são validados para garantir que o campo de e-mail seja preenchido corretamente.
- Os dados válidos são armazenados em um banco de dados MySQL para futura referência.
- As mensagens de erro são exibidas aos usuários em caso de falha no envio do formulário ou problemas na conexão com o banco de dados.

## Tecnologias Utilizadas

- HTML: Linguagem de marcação utilizada para criar a estrutura do formulário de contato.
- CSS: Folhas de estilo utilizadas para aprimorar o layout e a aparência do formulário.
- PHP: Linguagem de programação utilizada para processar os dados do formulário e interagir com o banco de dados.
- MySQL: Sistema de gerenciamento de banco de dados utilizado para armazenar os dados dos usuários.

## Configuração do Banco de Dados

Para utilizar o projeto em seu ambiente local, siga as etapas abaixo para configurar o banco de dados:

1. Crie um banco de dados MySQL em seu servidor.
2. No arquivo `email.php`, altere as seguintes variáveis de conexão com o banco de dados de acordo com suas configurações:
   - `$servername`: Endereço do servidor de banco de dados.
   - `$username`: Nome de usuário do banco de dados.
   - `$password`: Senha do banco de dados.
   - `$dbname`: Nome do banco de dados criado.
3. Execute a consulta SQL abaixo para criar a tabela no banco de dados:
CREATE TABLE IF NOT EXISTS tabela_de_emails (
id INT AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(255) NOT NULL,
email VARCHAR(255) NOT NULL,
message TEXT
);

## Como Executar o Projeto

1. Clone este repositório em sua máquina local.
2. Certifique-se de ter um servidor web e PHP instalados em seu ambiente.
3. Coloque os arquivos do projeto em um diretório acessível pelo servidor web.
4. Acesse o formulário de contato em seu navegador usando a URL correspondente ao diretório onde os arquivos foram colocados.
5. Preencha o formulário com as informações solicitadas e clique em "Enviar".
6. Os dados serão processados e armazenados no banco de dados.
7. Verifique a saída no navegador para ver se os dados foram inseridos com sucesso ou se ocorreu algum erro.

Sinta-se à vontade para ajustar ou personalizar o projeto de acordo com suas necessidades específicas.




