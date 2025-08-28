<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $para = "elianaffsantos81@gmail.com";
    $assunto = "Nova ficha de paciente - Vida Terapia";

    $mensagem = "📌 Ficha de Cadastro:\n\n";
    foreach($_POST as $campo => $valor){
        $mensagem .= ucfirst($campo) . ": " . $valor . "\n";
    }

    $cabecalhos = "From: contato@vidaterapia.com\r\n" .
                  "Reply-To: " . $_POST['email'] . "\r\n" .
                  "X-Mailer: PHP/" . phpversion();

    mail($para, $assunto, $mensagem, $cabecalhos);
    echo "Ficha enviada com sucesso!";
}
?>
