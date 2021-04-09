<html>
<head>
	<title>Processando e-mail...</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" type="image/png" href="images/mail.png" />
	<style>
    body {
        background-image: linear-gradient(to top, #fad0c4 0%, #ffd1ff 100%);
    }
	</style>
</head>
<body>

<?php 
	$nome = $_POST['nome'];
	$sobrenome = $_POST['nick'];
	$email = $_POST['email'];
	$celular = $_POST['celular'];
	$mensagem = $_POST['mensagem'];
?>

<?php
	$to = "silasrodrigues.ti@hotmail.com";
	$subject = "Contato do Portfólio";
	$message = "Nome: $nome $sobrenome\nEmail: $email\nCelular: $celular\nMensagem: $mensagem";
	$header = "MIME-Version 1.1\n";
	$header .= "From: Contato Portfólio <" . $email . ">\r\n" . "X-Mailer: PHP/" . phpversion() . "\r\n";
	$header .= "Cc: Contato - Stream <silasrodrigues.fatec@gmail.com>\n";
	$header .= "Reply-To: " .$email . "\n";

$envio = mail($to, $subject, $message, $header);
?>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <?php

	if($envio) 
	{
		?>
		<script>
			swal("Bom trabalho!", "Seu email foi enviado com sucesso", "success");
			setTimeout(function(){location.href="index.html"} , 5000); 
		</script>
		<?php	
	} 
	else 
	{
		?>
		<script>
			sweetAlert("Ooops...", "Seu email não foi enviado", "error");
			setTimeout(function(){location.href="index.html"} , 5000);
		</script>
		<?php
	}

?>
</body>
</html>