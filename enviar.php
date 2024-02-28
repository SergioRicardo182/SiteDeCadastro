<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];
    
    $destinatario = "seu_email@example.com";
    $assunto = "Nova mensagem de contato";
    $corpo = "Nome: $nome\n";
    $corpo .= "E-mail: $email\n";
    $corpo .= "Mensagem:\n$mensagem\n";
    
    if (mail($destinatario, $assunto, $corpo)) {
        echo "<p>Mensagem enviada com sucesso!</p>";
    } else {
        echo "<p>Erro ao enviar mensagem. Por favor, tente novamente mais tarde.</p>";
    }
}
?>
