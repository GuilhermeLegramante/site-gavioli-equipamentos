<?php
	require 'PHPMailer/PHPMailerAutoload.php';

	$Mailer = new PHPMailer();
	
	//Define que será usado SMTP
	$Mailer->IsSMTP();
	
	//Enviar e-mail em HTML
	$Mailer->isHTML(true);
	
	//Aceitar carasteres especiais
	$Mailer->Charset = 'UTF-8';
	
	//Configurações
	$Mailer->SMTPAuth = false;
	$Mailer->SMTPSecure = false;
	
	//nome do servidor
	$Mailer->Host = 'relay-hosting.secureserver.net';
	//Porta de saida de e-mail 
	$Mailer->Port = 25;
	
	//Dados do e-mail de saida - autenticação
	$Mailer->Username = 'guilhermelegramante@gmail.com';
	$Mailer->Password = 'stratocaster123';
	
	//E-mail remetente (deve ser o mesmo de quem fez a autenticação)
	$Mailer->From = 'guilhermelegramante@gmail.com';
	
	//Nome do Remetente
	$Mailer->FromName = $_POST["nome"];
	
	//Assunto da mensagem
	$Mailer->Subject = $_POST["email"];
	
	//Corpo da Mensagem
	$Mailer->Body = $_POST["mensagem"];
	
	//Corpo da mensagem em texto
	$Mailer->AltBody = 'conteudo do E-mail em texto';
	
	//Destinatario 
	$Mailer->AddAddress('guilhermelegramante@gmail.com');
	
	if($Mailer->Send()){
		echo ("<script>
        window.alert('Mensagem enviada com sucesso')
        window.location.href='/';
    	</script>");
	}else{
		echo "Erro no envio do e-mail: " . $Mailer->ErrorInfo;
	}
	
?>



