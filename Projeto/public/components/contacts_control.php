<?php
/*SendGrid Library*/
require_once('../../Sendgrid/vendor/autoload.php');

/*Dados do formulário*/
$nome = $_POST['nome'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];

/*Conteúdo*/
$from = new SendGrid\Email($nome, $email);
$subject = "Mensagem via formulário de contacto";
$to = new SendGrid\Email("Bioliving", "bio.labmm4.project@gmail.com");
$content = new SendGrid\Content("text/html", "
    Email: {$email}<br>
    Nome: {$nome}<br>
    Assunto: {$assunto}<br>
    Mensagem: {$mensagem}
    ");

/*Envio do email*/
$mail = new SendGrid\Mail($from, $subject, $to, $content);
$apiKey = ('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');
$sg = new \SendGrid($apiKey);

/*Resposta*/
$resposta = $sg->client->mail()->send()->post($mail);

//Mensagem de sucesso
    header("Location: ../pages/info_bioliving.php?msg=1");