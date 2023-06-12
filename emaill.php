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
    $dbname = "sturdy-practice-389401:us-central1:form";

    // Cria a conexão
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica se ocorreu algum erro na conexão
    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }

    // Cria a consulta SQL para inserir os dados no banco de dados
    $sql = "INSERT INTO tabela_de_emails (nome, email, message) VALUES ('$nome', '$email', '$message')";

    // Executa a consulta
    if ($conn->query($sql) === TRUE) {
        echo "Dados inseridos com sucesso!";
    } else {
        echo "Erro ao inserir dados: " . $conn->error;
    }

    // Fecha a conexão com o banco de dados
    $conn->close();
}
?>
