<?php
// Configurações de conexão com o banco de dados
$host = $_ENV['DB_HOST'];
$usuario = $_ENV['DB_USER'];
$senha = $_ENV['DB_PASS'];
$banco_de_dados = $_ENV['DB_NAME'];

if($_POST('teste')){
    // Conexão com o banco de dados
    $mysqli = new mysqli($host, $usuario, $senha, $banco_de_dados);

    // Verifica se houve erros na conexão
    if ($mysqli->connect_error) {
        die('Erro na conexão com o banco de dados: ' . $mysqli->connect_error);
    }
    
    // Consulta SQL
    $sql = "";

    // Executa a consulta
    $resultado = $mysqli->query($sql);

    //Transforma a consulta em um array
    $return = $resultado->fetch_assoc();

    // Verifica se houve erros na consulta
    if (!$resultado) {
    die(json_encode(['status' => 'error', 'mesagem' => 'Erro na consulta SQL: ' . $mysqli->error]));
    }

    // Verifica se a consulta voltou algum dado
    if (count($return) <= 0) {
    die(json_encode(['status' => 'error', 'mesagem' => 'Nenhum dado encontrado.']));
    }

    // Fecha a conexão com o banco de dados
    $mysqli->close();

    //Envia os dados para o JS
    die(json_encode(['status' => 'ok']));

}

?>