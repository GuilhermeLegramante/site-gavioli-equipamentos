<?php
 
  $destinatario = "guilhermelegramante@gmail.com";
  $nome = $_POST['name'];
  $email = $_POST['email'];
  $assunto = $_POST['subject'];
  $mensagem = "<strong>Nome:  </strong>".$nome;
  $mensagem .= "<br>  <strong>Mensagem: </strong>".$_POST['message'];
 
  
  mail($destinatario, $assunto, $mensagem); 

?>