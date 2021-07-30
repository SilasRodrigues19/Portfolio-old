<html>
<head>
	<title>Processando e-mail...</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" type="image/png" href="../assets/img/favicon-mail.ico">
	<style>
		@import url(../assets/css/swal.css);
    body {
        background-image: url('https://cdn.pixabay.com/photo/2018/03/22/02/37/email-3249062_1280.png'), linear-gradient(to top, #fad0c4 0%, #ffd1ff 100%);
        background-repeat: no-repeat;
        background-size: cover;
    }

	</style>
</head>
<body>

<?php
session_start();

require_once('PHPMailer.php');
require_once('SMTP.php');
require_once('Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$nome = utf8_decode($_POST['nome']);
$sobrenome = utf8_decode($_POST['sobrenome']);
$email = $_POST['email'];
$celular = $_POST['celular'];
$mensagem = utf8_decode($_POST['mensagem']);

$resultBtn = filter_input(INPUT_POST, 'btnSubmit', FILTER_SANITIZE_STRING);

// Se o usuário clicou no botão para enviar o formulário
if ($resultBtn) {
	$mail = new PHPMailer(true);

	try {
		// Server Settings
		//$mail->SMTPDebug = SMTP::DEBUG_SERVER; //verbose debug output
		$mail->isSMTP(); // To use SMTP
		$mail->Host = 'smtp.gmail.com'; // Change if u don't use Gmail
		$mail->SMTPAuth = true; // Authentication
		$mail->Username = 'email@domain.com'; // Your domain e-mail
		$mail->Password = 'password'; // Your pass
		$mail->Port = 587; // Gmail default port

		// Recipients
		$mail->setFrom('silasrodrigues.fatec@gmail.com'); // Name optional example ('example@gmail.com', 'Your Name');
		$mail->addAddress('silasrodrigues.fatec@gmail.com'); // Name optional example ('example@gmail.com', 'Your Name');


		// Content
		$mail->isHTML(true); // Set HTML format
		$mail->Subject = 'Contato - Portfolio';
		$mail->Body = "<html><body><meta charset='utf-8'><table align='center' bgcolor='#EFEEEA' border='0' cellpadding='0' cellspacing='0' height='100%' width='100%' id='m_1274380306070959983bodyTable'> <tbody> <tr> <td align='center' valign='top' id='m_1274380306070959983bodyCell' style='padding-bottom:60px'> <span style='color:#ffe01b;display:none;font-size:0px;height:0px;width:0px'>Mensagem recebida!</span> <table align='center' border='0' cellpadding='0' cellspacing='0' width='100%'> <tbody> <tr> <td align='center' valign='top' bgcolor='#DC143C' style='background-color:#C01D46'> <table align='center' border='0' cellpadding='0' cellspacing='0' style='max-width:640px' width='100%'> <tbody> <tr> <td align='center' valign='top' style='padding:40px'> <a href='#' style='text-decoration:none' target='_blank'><img src='https://upload.wikimedia.org/wikipedia/commons/thumb/1/1c/Email_icon-black.svg/1200px-Email_icon-black.svg.png' width='60' style='border:0;color:#ffffff;font-family:'Helvetica Neue',Helvetica,Arial,Verdana,sans-serif;font-size:12px;font-weight:400;height:auto;letter-spacing:-1px;padding:0;margin:0;outline:none;text-align:center;text-decoration:none' class='CToWUd'></a> </td> </tr> <tr> <td style='background-color:#ffffff;padding-top:40px'>&nbsp;</td> </tr> </tbody> </table> </td> </tr> <tr> <td align='center' valign='top'> <table align='center' bgcolor='#FFFFFF' border='0' cellpadding='0' cellspacing='0' style='background-color:#ffffff;max-width:640px' width='100%'> <tbody> <tr> <td align='center' valign='top' bgcolor='#FFFFFF' style='padding-right:40px;padding-bottom:40px;padding-left:40px'> <h1 style='color:#241c15;font-family:Georgia,Times,'Times New Roman',serif;font-size:30px;font-style:normal;font-weight:400;line-height:42px;letter-spacing:normal;margin:0;padding:0;text-align:center'>Mensagem recebida do portfolio<br></h1></td> </tr> <tr> <td> <h3 style='color:#241c15;font-family:Georgia,Times,'Times New Roman',serif;font-size:12px;font-style:normal;letter-spacing:normal;margin:10px;padding:0;text-align:center'> <p style='color:#000; margin:12px;'><strong>Nome: </strong>$nome $sobrenome</p> <hr> <br> <p style='color:#000; margin:12px;'><strong>Email: </strong>$email</p> <hr> <br> <p style='color:#000; margin:12px;'><strong>Celular: </strong>$celular</p> <hr> <br> <p style='color:#000; margin:12px; height:100px'><strong>Mensagem: </strong>$mensagem</p> </h3> </td> </tr> </tbody> </table> </td> </tr> </tbody> </table> </td> </tr> </tbody></table></body></html>";


	?>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
	<?php

		if ($mail->send()) {
			?>
			<script>
				swal({
				  title: "Bom trabalho!",
				  text: "Seu email foi enviado com sucesso",
				  icon: "success",
				});
				setTimeout(function(){location.href="../public/index.php"} , 5000);
			</script>
			<?php
		} else {
			?>
			<script>
				sweetAlert("Ooops...", "Seu email não foi enviado", "error");
				setTimeout(function(){location.href="../public/index.php"} , 5000);
			</script>
			<?php
		}

	} catch (Exception $e) {
		echo "Erro ao enviar a mensagem: {$mail->ErrorInfo}";
		?>
		<script>
			swal({
			  title: "Erro de autenticação!",
			  text: "Contate um administrador!",
			  icon: "error",
			});
			setTimeout(function(){location.href="../public/index.php"} , 5000);
		</script>
		<?php
	}
  // Caso contrário, ou seja, não clicou no botão e acessou a URL vai exibir uma caixa de alerta informando que não da pra acessar via URL direto
} else {
	$_SESSION['msg'] = "<p id='psection' style='position:fixed; top: 90px; z-index:9999; color:#000; text-transform:uppercase; border-radius:10px; animation:fadeInDown 4s;' class='alert alert-warning w-50 text-center'>Acesso negado<br> Preencha o formulário e clique em enviar ao invés de acessar via URL <br> <button id='btnsection' class='btn btn-outline-danger w-100'>Fechar</button></p>";
	header("Location: ../public/index.php");
}

?>

</body>
</html>
