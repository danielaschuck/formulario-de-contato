<?php
// Verifica se o campo 'email' foi enviado via método POST e se não está vazio
if(isset($_POST['email']) && !empty($_POST['email'])) {
    // Pegando as variáveis do formulário
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $message = addslashes($_POST['message']);

    // Conexão ao banco de dados
    $servername = "35.193.200.135";
    $username = "dani";
    $password = "";
    $dbname = "usuarios";

    // Cria a conexão
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica se ocorreu algum erro na conexão
    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }

    // Cria a consulta SQL para criar a tabela caso ela não exista
    $createTableSql = "CREATE TABLE IF NOT EXISTS tabela_de_emails (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nome VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL,
        message TEXT NOT NULL
    )";

    // Executa a consulta para criar a tabela
    if ($conn->query($createTableSql) === TRUE) {
        echo "Tabela criada ou já existente!";
    } else {
        echo "Erro ao criar a tabela: " . $conn->error;
    }

    // Cria a consulta SQL para inserir os dados no banco de dados
    $sql = "INSERT INTO tabela_de_emails (nome, email, message) VALUES ('$nome', '$email', '$message')";

    // Executa a consulta de inserção de dados
    if ($conn->query($sql) === TRUE) {
        echo "Dados inseridos com sucesso!";
    } else {
        echo "Erro ao inserir dados: " . $conn->error;
    }

    // Fecha a conexão com o banco de dados
    $conn->close();
}
?>

//codigo no sdk necessario para conectar c google cloud = gcloud sql connect [NOME_DA_INSTANCIA] --user=root --database=[NOME_DO_BANCO_DE_DADOS] --project=[NOME_DO_PROJETO]
