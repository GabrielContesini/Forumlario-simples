<?php

if(isset($_POST['email']) && !empty($_POST['email'])) {

    $nome = addslashes($_POST['name']);
    $email = addslashes($_POST['email']);
    $mensagem = addslashes($_POST['message']);

    $to = "gabrielct.moraes@gmail.com";
    $subject = "Contato Programador PHP";
    $body = "Nome: ".$nome. "\n".
            "Email: ".$email. "\n".
            "Mensagem: ".$mensagem;

    $header = "From:acelia.contesini@gmail.com". "\r\n".
                "Reply-to:" . $email. "\r\n".
                "X=Mailer:PHP/".phpversion();

    if(mail($to, $subject, $body, $header)){
        echo ("Email enviado com sucesso!");
    }else{
        echo("Email nao pode ser eviado!"); //poderia tratar o erro, imaginar possibilidades !
    }

}
?>