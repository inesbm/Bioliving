<?php
if(isset($_POST['email'])) {
    $email_to = "bio.labmm4.project@gmail.com";
    $assunto = $_POST['assunto'];
//    "Your email subject line";

    //erros
    function died($erro) {
        echo "Pedimos desculpa, mas ocorreram erros na submissão do seu contacto.";
        echo "These errors appear below.<br /><br />";
        echo $erro."<br /><br />";
        echo "Por favor, retroceda e corrija os erros.<br /><br />";
        die();
    }


    // verificação se os campos foram preenchidos
    if(!isset($_POST['nome']) ||
        !isset($_POST['email']) ||
        !isset($_POST['assunto']) ||
        !isset($_POST['mensagem'])) {
        died('Pedimos desculpa mas existem campos que não foram preenchidos.');
    }



    $nome = $_POST['nome']; // required
    $email_from = $_POST['email']; // required
    $assunto = $_POST['assunto']; // required
    $mensagem = $_POST['mensagem']; // required

    $mensagem_erro = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

    if(!preg_match($email_exp,$email_from)) {
        $mensagem_erro .= 'O email introduzido não é válido.<br />';
    }

    $string_exp = "/^[A-Za-z .'-]+$/";

    if(!preg_match($string_exp,$nome)) {
        $mensagem_erro .= 'O nome introduzido não é válido.<br />';
    }

    if(strlen($mensagem) < 2) {
        $mensagem_erro .= 'A mensagem introduzida não é válida.<br />';
    }

    if(strlen($mensagem_erro) > 0) {
        died($mensagem_erro);
    }

    $mensagem_erro = "Detalhes do formulário em baixo.\n\n";


    function clean_string($string) {
        $bad = array("content-type","bcc:","to:","cc:","href");
        return str_replace($bad,"",$string);
    }



    $mensagem .= "Nome: ".clean_string($nome)."\n";
    $mensagem .= "Email: ".clean_string($email_from)."\n";
    $mensagem .= "Assunto: ".clean_string($assunto)."\n";
    $mensagem .= "Mensagem: ".clean_string($mensagem)."\n";

// create email headers
    $headers = 'De: '.$email_from."\r\n".
        'Responder para: '.$email_from."\r\n" .
        'X-Mailer: PHP/' . phpversion();
    @mail($email_to, $assunto, $mensagem, $headers);

//Mensagem de sucesso
    header("Location: ../pages/info_bioliving.php?msg=1");
//    Obrigado pelo seu contacto. Tentaremos responder assim que possível.

}
?>