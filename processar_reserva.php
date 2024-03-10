<?php

// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os dados do formulário
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $servicos = implode(", ", $_POST["servicos"]);
    $forma_pagamento = $_POST["forma_pagamento"];
    $prazo_pagamento = $_POST["prazo_pagamento"];
    $comentarios = $_POST["comentarios"];

    // Formata os dados
    $dados_reserva = "Nome: $nome\n";
    $dados_reserva .= "Email: $email\n";
    $dados_reserva .= "Serviços Desejados: $servicos\n";
    $dados_reserva .= "Forma de Pagamento: $forma_pagamento\n";
    $dados_reserva .= "Prazo de Pagamento: $prazo_pagamento\n";
    $dados_reserva .= "Comentários Adicionais: $comentarios\n";

    // Salva os dados em um arquivo de texto
    $arquivo = "C:/Users/lucas/OneDrive/Documentos/z Projetos/Site/reservas.txt";
    file_put_contents($arquivo, $dados_reserva, FILE_APPEND | LOCK_EX);

    // Redireciona de volta para a página de origem
    header("Location: reserva.html");
    exit();
}

?>
