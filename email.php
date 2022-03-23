<?php
$para = "carloseduardo384.45@gmail.com";//para onde vamos enviar
$assunto = "Teste de envio de email";//assunto ou subject
$corpo = "Olá, este email de teste";//corpo do email texto
$headers = "From:carloseduardo384.45@gmail.com";//cabeçalho

if (mail($para, $assunto, $corpo, $headers)){
    echo"Email enviado para $para com sucesso!";
}
else{
    echo"Falha no envio do email.";
}
?>