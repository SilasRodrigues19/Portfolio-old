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

require_once('PHPMailer.php');
require_once('SMTP.php');
require_once('Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$celular = $_POST['celular'];
$mensagem = $_POST['mensagem'];

$mail = new PHPMailer(true);

try {
	// Server Settings
	//$mail->SMTPDebug = SMTP::DEBUG_SERVER; //verbose debug output
	$mail->isSMTP(); // To use SMTP
	$mail->Host = 'smtp.gmail.com'; // Change if u don't use Gmail
	$mail->SMTPAuth = true; // Authentication
	$mail->Username = 'example@gmail.com'; // Your domain e-mail
	$mail->Password = 'yourpassword'; // Your pass
	$mail->Port = 587; // Gmail default port

	// Recipients
	$mail->setFrom('silasrodrigues.fatec@gmail.com'); // Name optional example ('example@gmail.com', 'Your Name');
	$mail->addAddress('silasrodrigues.fatec@gmail.com'); // Name optional example ('example@gmail.com', 'Your Name');


	// Content
	$mail->isHTML(true); // Set HTML format
	$mail->Subject = 'Contato - Portfolio';
	$mail->Body = "<div style='padding: 2rem 1rem; margin: 1rem 4rem 1rem 1rem; background: linear-gradient(to bottom, rgba(255,255,255,0.15) 0%, rgba(0,0,0,0.15) 100%), radial-gradient(at top center, rgba(255,255,255,0.40) 0%, rgba(0,0,0,0.40) 120%) #989898;
 background-blend-mode: multiply,multiply; border-radius: 0.3rem;'><p style='color:#fff;'><strong>Nome: </strong>$nome $sobrenome</p> <hr><br><p style='color:#fff'><strong>Email: </strong>$email</p> <hr><br><p style='color:#fff;'><strong>Celular: </strong>$celular</p> <hr><br><p style='color:#fff;'><strong>Mensagem: </strong>$mensagem</p></div>";


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
			setTimeout(function(){location.href="../public/index.html"} , 5000); 
		</script>
		<?php
	} else {
		?>
		<script>
			sweetAlert("Ooops...", "Seu email não foi enviado", "error");
			setTimeout(function(){location.href="../public/index.html"} , 5000);
		</script>
		<?php
	}

} catch (Exception $e) {
	echo "Erro ao enviar a mensagem: {$mail->ErrorInfo}";
	?>
	<script>
		swal({
		  title: "Erro de codificação!",
		  text: "Contate um administrador!",
		  icon: "error",
		});
		setTimeout(function(){location.href="../public/index.html"} , 5000);
	</script>
	<?php
}


?>

</body>
</html>