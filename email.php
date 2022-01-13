<?php

if(isset($_POST['email'] && !empty($_POST['email'])){

$nome = addslashes($_POST['name']);
$email = addslashes($_POST['email']);
$mensagem = addslashes($_POST['message']);

$to = "alex.consultoria.asi@gmail.com";
$subject = "Contato - Programador Br";
$body = "Nome: ".$nome. "\n".
        "Email: ".$email. "\n".
        "message: ".$mensagem;
$header = "From:lekinho.kiss@gmail.com"."\r\n".
          "Reply-to" .$email. "\e\n".
          "X-Mailer:PHP/".phpversion();

          if(mail($to, $subject, $body, $header)){
              echo("Email enviado com sucesso!");

          }else{
              echo("O email não pode ser enviado");
          }

          

}


?>