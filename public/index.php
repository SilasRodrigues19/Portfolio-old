<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<meta http-equiv="Cache-control" content="public">
	<meta name="robots" content="index, nofollow">
	<meta http-equiv="content-language" content="pt-br, en-US">
	<meta name="description" content="Meu nome é Silas Rodrigues e este é meu portfolio com todos os trabalhos já realizados até então,
	sou programador e desenvolvo aplicações web">
	<meta name="keywords" content="Silas Rodrigues, freelancer, programador, desenvolvedor">
	<meta name="author" content="Silas Rodrigues">
	<title>Portfólio | Silas Rodrigues</title>
	<!-- Favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon-16x16.png">
  <link rel="manifest" href="assets/img/site.webmanifest">
	<link rel="shortcut icon" href="../public/favicon.ico">

	<!-- Bootstrap 4.0.0 -->
	<link rel="stylesheet" href="../assets/css/bootstrap.css">

	<!-- Reset CSS -->
	<link rel="stylesheet" href="../assets/css/reset.css">

	<!-- My styles -->
	<link rel="stylesheet" href="../assets/css/style.css">
	<link rel="stylesheet" href="../assets/css/header.css">
	<link rel="stylesheet" href="../assets/css/home.css">
	<link rel="stylesheet" href="../assets/css/services.css">
	<link rel="stylesheet" href="../assets/css/projects.css">
	<link rel="stylesheet" href="../assets/css/carousel.css">
	<link rel="stylesheet" href="../assets/css/certificates.css">
	<link rel="stylesheet" href="../assets/css/form.css">
	<link rel="stylesheet" href="../assets/css/footer.css">
	<link rel="stylesheet" href="../assets/css/loader.css">

	<!-- Media Queries -->
	<link rel="stylesheet" href="../assets/css/mediaquery.css">

	<!-- Fonte Awesome and Icons CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.css">
	<link rel="stylesheet" href="../assets/css/icons.css">

	<!-- Animate CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.0/animate.min.css">

	<!-- Lightbox -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">

	<!-- JQuery Compatible with JQuery Mask-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

	<!-- JQuery Validator -->
	<script src="../assets/js/jquery.validate.min.js"></script>

	<!-- Mask Plugin JQuery -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

	<!-- Form Validator -->
	<script src="../assets/js/formvalidator.js"></script>

  <!-- Validator Messages -->
	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/localization/messages_ptbr.js"></script>
	<!-- Scripts need to be imported before </head> to resolve validation messages error -->
</head>
<body ondragstart="false">
	<!-- Header -->
	<header id="header">
		<div class="header container">
			<div class="nav-bar">
				<div class="brand">
					<a href="#home" class="scroll margin"><h1>Silas <span>Rodrigues</span></h1></a>
				</div>
				<div class="nav-list">
						<!-- Mobile Menu -->
						<input id="hamburger" type="checkbox">
						<label for="hamburger">
							<div class="menu">
								<div class="bar"></div>
							</div>
						</label>
						<ul>
							<li data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="450"><a class="scroll" href="#services" data-after="Services">Serviços</a></li>
							<li data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="650"><a class="scroll" href="#projects" data-after="Projects">Projetos</a></li>
							<li data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="850"><a class="scroll" href="#certificates" data-after="Courses">Cursos</a>
							</li>
							<li data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="1050"><a class="scroll" href="#form" data-after="Contact">Contato</a>
							</li>
						</ul>
				</div>
			</div>
		</div>
	</header>
	<!-- End Header -->

	<!-- Home Section -->
	<section id="home">
		<div id="loader">
			<span></span>
			<span></span>
			<span></span>
		</div>
		<div class="home container">
			<div class="info container">
				<?php
					if(isset($_SESSION['msg'])){
					echo $_SESSION['msg'];
					unset($_SESSION['msg']);
				}
				?>
				<h1 class="infoText">Olá,</h1>
				<h1 class="infoText">Seja bem-vindo(a)</h1>
				<h1 class="infoText">Conheça meu</h1>
				<a href="#projects" type="button" class="cta scroll" data-toggle="tooltip" title="Clique e veja meus projetos!">Portfolio</a>
				<h2 class="arrayText">Eu sou <span class="typed-text"></span><span class="cursor typing">&nbsp;</span></h2>
			</div>

			<aside class="social">
				<ul>
					<li>
						<a href="https://whats.link/silasrodrigues21" target="_blank" rel="noreferrer">
							<i class="fab fa-whatsapp"></i>
							<span>WhatsApp</span>
						</a>
					</li>
					<li>
						<a href="https://twitter.com/Jinuye1" target="_blank" rel="noreferrer"><i class="fab fa-twitter"></i>
							<span>Twitter</span>
						</a>
					</li>
					<li>
						<a href="https://github.com/SilasRodrigues19" target="_blank" rel="noreferrer"><i class="fab fa-github"></i>
							<span>GitHub</span>
						</a>
					</li>
				</ul>
			</aside>

		</div>

	</section>
	<!-- End Home Section -->

  <!-- Service Section -->
  <section id="services">
  	<div class="section-title">
  		<h1 data-aos="fade-down">Conhecimentos</h1>
			<p data-aos="fade-up">Abaixo estão as principais ferramentas e tecnologias que eu utilizo <br> para realizar os serviços prestados.</p>
			<hr data-aos="fade-down">
		</div>
		<div class="knowledges">
  		<div class="knowledge" data-aos="fade-left" data-aos-duration="900">
  			<div class="knowledge-header">
  				<img src="../assets/img/languagens/html.webp" alt="HTML Logo" data-toggle="tooltip" title="HTML 5">
					<p>Linguagem de marcação de texto para estruturar e apresentar páginas web.</p>
  			</div>
  		</div>
  		<div class="knowledge" data-aos="fade-left" data-aos-duration="900">
  			<div class="knowledge-header">
  				<img src="../assets/img/languagens/css.webp" alt="CSS Logo" data-toggle="tooltip" title="CSS">
					<p>Utilizado para estilizar a aparência de uma página, animar, usar transições e afins.</p>
  			</div>
  		</div>
  		<div class="knowledge" data-aos="fade-left" data-aos-duration="900">
  			<div class="knowledge-header">
  				<img src="../assets/img/languagens/javascript.webp" alt="JavaScript Logo" data-toggle="tooltip" title="JavaScript">
					<p>Linguagem de programação que permite a criação de conteúdos dinâmicos e deixá-lo mais interativo.</p>
  			</div>
  		</div>
  		<div class="knowledge" data-aos="fade-left" data-aos-duration="900">
  			<div class="knowledge-header">
  				<img src="../assets/img/languagens/react.webp" alt="ReactJS Logo" data-toggle="tooltip" title="ReactJS">
					<p>React JS é uma biblioteca JavaScript para a criação de interfaces de usuário ou UI (user interface).</p>
  			</div>
  		</div>
  		<div class="knowledge" data-aos="fade-left" data-aos-duration="900">
  			<div class="knowledge-header">
  				<img src="../assets/img/languagens/mysql.webp" alt="MySQL Logo" data-toggle="tooltip" title="MySQL">
					<p>O MySQL é um sistema de gerenciamento de banco de dados, que utiliza a linguagem SQL.</p>
  			</div>
  		</div>
  		<div class="knowledge" data-aos="fade-left" data-aos-duration="900">
  			<div class="knowledge-header">
					<img src="../assets/img/languagens/jquery.webp" alt="jquery Logo" data-toggle="tooltip" title="jQuery">
					<p>jQuery é uma biblioteca JavaScript que facilita a manipulação de eventos, animações, HTML e utilização de AJAX</p>
  			</div>
  		</div>
			<div class="knowledge" data-aos="fade-left" data-aos-duration="900">
  			<div class="knowledge-header">
  				<img src="../assets/img/languagens/figma.webp" alt="Figma Logo" data-toggle="tooltip" title="Figma">
					<p>O Figma é uma ferramenta de design para interfaces, que oferece a possibilidade de trabalho colaborativo.</p>
  			</div>
  		</div>
			<div class="knowledge" data-aos="fade-left" data-aos-duration="900">
  			<div class="knowledge-header">
					<img src="../assets/img/languagens/bulma.webp" alt="Bulma Logo" data-toggle="tooltip" title="Bulma">
					<p>Bulma é um framework CSS totalmente gratuito, inspirado no Bootstrap e baseado em Flexbox, que já tem uma compatibilidade bem grande entre os navegadores.</p>
  			</div>
			</div>
			<div class="knowledge" data-aos="fade-left" data-aos-duration="900">
				<div class="knowledge-header">
					<img src="../assets/img/languagens/php.webp" alt="PHP Logo" data-toggle="tooltip" title="PHP">
					<p>PHP é uma linguagem de programação web que favorece a conexão entre os servidores e a interface do usuário.</p>
  			</div>
			</div>
			<div class="knowledge" data-aos="fade-left" data-aos-duration="900">
				<div class="knowledge-header">
          <img src="../assets/img/languagens/git.webp" alt="Git Logo" data-toggle="tooltip" title="Git">
					<p>Git é um sistema de controle de versão de projetos.</p>
				</div>
			</div>
			<div class="knowledge" data-aos="fade-left" data-aos-duration="900">
				<div class="knowledge-header">
					<img src="../assets/img/languagens/bootstrap.webp" alt="Bootstrap Logo" data-toggle="tooltip" title="Bootstrap">
					<p>Bootstrap é um framework CSS moderno que organiza e gerencia o layout de um site.</p>
				</div>
  		</div>
			<div class="knowledge" data-aos="fade-left" data-aos-duration="900">
				<div class="knowledge-header">
					<img src="../assets/img/languagens/sass.webp" alt="SASS Logo" data-toggle="tooltip" title="SASS">
					<p>SASS é uma linguagem de extensão ao CSS que dá um controle mais profissional e dinâmico.</p>
				</div>
  		</div>
    </div>

  </section>
	<!-- End Service Section -->

	<!-- Projects Section -->
	<section id="projects">
		<div class="projects container">
			<div class="projects-header">
				<h1 class="section-title">
					<div data-aos="fade-down"><span>Projetos</span> pessoais</div>
					<hr data-aos="fade-down">
					<p data-aos="fade-right">Os projetos abaixo não possuem nenhum vínculo empregatício</p>
					<hr data-aos="fade-down">
					<p data-aos="fade-left">Clique na imagem para saber mais sobre o respectivo projeto</p>
					<hr data-aos="fade-up">
					<img data-aos="flip-down" class="programmer" src="../assets/img/programmer.webp" alt="Programador">
				</h1>
			</div>
			<div class="all-projects" data-aos="zoom-in">
				<div class="project-item">
					<div class="project-info">
						<!-- Caroussel -->
						<div id="jobsCarousel" class="carousel slide carousel-fade" data-ride="carousel">
							<ol class="carousel-indicators">
							    <li data-target="#jobsCarousel" data-slide-to="0"></li>
							    <li data-target="#jobsCarousel" data-slide-to="1"></li>
							    <li data-target="#jobsCarousel" data-slide-to="2"></li>
									<li data-target="#jobsCarousel" data-slide-to="3"></li>
									<li data-target="#jobsCarousel" data-slide-to="4" class="active"></li>
									<li data-target="#jobsCarousel" data-slide-to="5"></li>
							 </ol>
						  <div class="carousel-inner">
								<!-- Project 1 -->
						    <div class="carousel-item" data-toggle="tooltip" title="Criado para o Streamer Luiz 'SimpSonsS' Guilherme, clique para visualizar!">
						      <a href="https://siimpsonss.vercel.app" rel="noreferrer" target="_blank">
						      	<img class="d-block w-100" src="../assets/img/project1.webp" alt="Stream do SimpSonsS">
						      </a>
						      <div class="carousel-caption">
						        <h2>Stream do Luiz "SimpSonsS" Guilherme</h2>
						      </div>
						    </div>
								<!-- Project 2 -->
						    <div class="carousel-item" data-toggle="tooltip" title="Venda de serviço para jogo online">
						      <a href="https://jobison-services.vercel.app" rel="noreferrer" target="_blank">
						      	<img class="d-block w-100" src="../assets/img/project2.webp" alt="Jobison Services">
						      </a>
						      <div class="carousel-caption">
						        <h2>Serviço de Elo Job League of Legends</h2>
						      </div>
						    </div>
								<!-- Project 3 -->
						    <div class="carousel-item" data-toggle="tooltip" title="Sistema de cadastro de aluno e gerenciamento de cursos, alunos e matriculas">
						      <a href="https://github.com/SilasRodrigues19/PHP-MySQL-DogCursos" rel="noreferrer" target="_blank">
						      	<img class="d-block w-100" src="../assets/img/project3.webp" alt="Sistema de cadastro de cursos">
						      </a>
						      <div class="carousel-caption">
						        <h2>Dog Cursos - Matricule-se</h2>
						      </div>
						    </div>
								<!-- Project 4 -->
								<div class="carousel-item" data-toggle="tooltip" title="Jogo da cobrinha">
						      <a href="https://snake-game-silasrodrigues19.vercel.app" rel="noreferrer" target="_blank">
						      	<img class="d-block w-100" src="../assets/img/project4.webp" alt="Snake Game">
						      </a>
						      <div class="carousel-caption">
						        <h2>Jogo da cobrinha feito em JavaScript</h2>
						      </div>
						    </div>
								<!-- Project 5 -->
								<div class="carousel-item active" data-toggle="tooltip" title="Custom Clone Instagram">
						      <a href="https://clone-insta-homepage.vercel.app" rel="noreferrer" target="_blank">
						      	<img class="d-block w-100" src="../assets/img/project5.webp" alt="Clone personalizado da home page do instagram">
						      </a>
						      <div class="carousel-caption">
						        <h2>Clone da Home Page do Instagram</h2>
						      </div>
						    </div>
								<!-- Project 6 -->
								<div class="carousel-item" data-toggle="tooltip" title="Buscando perfils com API do GitHub">
						      <a href="#" rel="noreferrer" target="_blank">
						      	<img class="d-block w-100" src="../assets/img/project6.webp" alt="Pesquisando com API do GitHub">
						      </a>
						      <div class="carousel-caption">
						        <h2>Pesquisando com API do GitHub</h2>
						      </div>
						    </div>
						  </div>
							<!-- Prev button -->
						  <a class="carousel-control-prev" href="#jobsCarousel" role="button" data-slide="prev">

						    <span class="carousel-control-prev-icon"></span>
						    <span class="sr-only">prev</span>
						  </a>
							<!-- Next button -->
						  <a class="carousel-control-next" href="#jobsCarousel" role="button" data-slide="next">
						    <span class="carousel-control-next-icon"></span>
						    <span class="sr-only">next</span>
						  </a>
						</div>
						<!-- End Caroussel-->
					</div>
			</div>
	</section>
	<!-- End Projects Section -->

	<!-- Certificate Section -->
	<section id="certificates">
		<div class="certificates container">
			<div class="certificate-header">
				<h1 class="section-title" data-aos="fade-down">Certificados</h1>
				<hr data-aos="fade-up">
			</div>
			<div class="certificate" data-aos="fade-left" data-aos-duration="1200">
				<a href="../assets/img/certificados/bootstrap.webp" data-lightbox="mygallery" data-title="Bootstrap">
					<img src="../assets/img/certificados/bootstrap.webp" width="200" height="150" alt="Certificado Bootstrap" data-aos="fade-left" data-aos-duration="1200" data-aos-easing="ease-in-sine">
				</a>
				<a href="../assets/img/certificados/git.webp" data-lightbox="mygallery" data-title="Git">
					<img src="../assets/img/certificados/git.webp" width="200" height="150" alt="Certificado Git" data-aos="fade-left" data-aos-duration="1250" data-aos-easing="ease-in-sine">
				</a>
				<a href="../assets/img/certificados/HTML-CSS.webp" data-lightbox="mygallery" data-title="HTML e CSS">
					<img src="../assets/img/certificados/HTML-CSS.webp" width="200" height="150" alt="Certificado HTML e CSS" data-aos="fade-left" data-aos-offset="100" data-aos-easing="ease-in-sine">
				</a>
				<a href="../assets/img/certificados/HTML-CSS2.webp" data-lightbox="mygallery" data-title="HTML e CSS 2">
					<img src="../assets/img/certificados/HTML-CSS2.webp" width="200" height="150" alt="Certificado HTML e CSS 2" data-aos="fade-left" data-aos-offset="100" data-aos-easing="ease-in-sine">
				</a>
				<a href="../assets/img/certificados/html-basico.webp" data-lightbox="mygallery" data-title="HTML básico">
					<img src="../assets/img/certificados/html-basico.webp" width="200" height="150" alt="Certificado HTML básico" data-aos="fade-left" data-aos-offset="100" data-aos-easing="ease-in-sine">
				</a>
				<a href="../assets/img/certificados/jquery.webp" data-lightbox="mygallery" data-title="jQuery">
					<img src="../assets/img/certificados/jquery.webp" width="200" height="150" alt="Certificado jQuery" data-aos="fade-left" data-aos-offset="100" data-aos-easing="ease-in-sine">
				</a>
				<a href="../assets/img/certificados/logica.webp" data-lightbox="mygallery" data-title="Lógica">
					<img src="../assets/img/certificados/logica.webp" width="200" height="150" alt="Certificado Lógica" data-aos="fade-left" data-aos-offset="100" data-aos-easing="ease-in-sine">
				</a>
				<a href="../assets/img/certificados/MySQL.webp" data-lightbox="mygallery" data-title="MySQL">
					<img src="../assets/img/certificados/MySQL.webp" width="200" height="150" alt="Certificado MySQL" data-aos="fade-left" data-aos-offset="100" data-aos-easing="ease-in-sine">
				</a>
				<a href="../assets/img/certificados/php.webp" data-lightbox="mygallery" data-title="PHP">
					<img src="../assets/img/certificados/php.webp" width="200" height="150" alt="Certificado PHP" data-aos="fade-left" data-aos-offset="100" data-aos-easing="ease-in-sine">
				</a>
				<a href="../assets/img/certificados/WebDesign.webp" data-lightbox="mygallery" data-title="Web Design">
					<img src="../assets/img/certificados/WebDesign.webp" width="200" height="150" alt="Certificado Web Design" data-aos="fade-left" data-aos-offset="100" data-aos-easing="ease-in-sine">
				</a>

			</div>
		</div>
	</section>
	<!-- End Certificate Section -->


	<!-- Form Section -->
	<section id="form">
		<div class="form container">
			<div class="form-header">
				<h1 class="section-title">
					<div data-aos="fade-down"><span>Contato</span> pessoal</div>
					<hr data-aos="fade-up">
					<p data-aos="fade-up">Utilize o formulário abaixo para me enviar um e-mail para contato</p>
				</h1>
			</div>
			<div class="my-form" data-aos="zoom-in-up">
		    <div class="row">
		      <div class="col-12 text-center my-5">
		        <h1 class="display-4"><i class="fa fa-paper-plane"></i> Formulário de Contato</h1>
		      </div>
		    </div>

		    <div class="row justify-content-center mb-5">
		      <div class="col-sm-12 col-md-10 col-lg-8">
		        <form action="../src/mail.php" method="POST" id="formContact">
		          <div class="form-row">
								<!-- Name -->
		            <div class="form-group col-sm-6">
			            <label for="nome">Seu nome</label>
			            <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome">
		            </div>

								<!-- Surname -->
		          	<div class="form-group col-sm-6">
		              <label for="sobrenome">Seu sobrenome</label>
		              <input type="text" class="form-control" name="sobrenome" id="sobrenome" placeholder="Sobrenome">
		            </div>
		          </div>

		          <div class="form-row">
								<!-- Email -->
		            <div class="form-group col-sm-6">
			            <label for="email">Seu email</label>
			            <input type="email" class="form-control" name="email" id="email" placeholder="Email">
		            </div>

		          	<div class="form-group col-sm-6">
									<!-- Phone -->
		              <label for="celular">Seu celular</label>
		              <input type="text" class="form-control" name="celular" id="celular" placeholder="(00) 00000-0000">
		            </div>
		          </div>

		          <div class="form-row">
		            <div class="form-group col-sm-12">
									<!-- Message -->
		              <label for="mensagem">Sua mensagem</label>
		              <textarea class="form-control" name="mensagem" id="mensagem" cols="30" rows="10" placeholder="Sinta-se a vontade"></textarea>
		            </div>
		          </div>

		          <div class="form-row">
		            <div class="col-sm-12">
		              <input type="submit" class="btn btn-secondary form-control" name="btnSubmit" value="Enviar">
		            </div>
		          </div>
		        </form>
		      </div>
		    </div>
		  </div>
		</div>
	</section>
	<!-- End Form Section -->


	<!-- Footer -->
		<footer id="footer">
			<div class="footer container">
				<div class="brand" data-aos="fade-down">
					<h1>Silas <span>Rodrigues</span></h1>
				</div>
				<h2 data-aos="fade-up" data-aos-duration="2500" data-aos-offset="0">Desenvolvimento de sites</h2>
				<div class="contact-icon">
					<div class="contact-item text" data-toggle="tooltip" title="Sumaré - São Paulo">
						<div data-aos="fade-left" data-aos-offset="0">
							<i class="fa fa-globe-americas"></i>
						</div>
					</div>

					<div class="contact-item" data-toggle="tooltip" title="Me contate por e-mail">
						<div data-aos="fade-in" data-aos-offset="0">
							<a href="mailto:silasrodrigues.ti@hotmail.com?subject=Contato%20Site"><i class="fa fa-envelope"></i></a>
						</div>
					</div>

					<div class="contact-item" data-toggle="tooltip" title="Veja meu curriculo">
						<div data-aos="fade-right" data-aos-offset="0">
							<a href="https://resume.io/r/IVkNM7feV" rel="noreferrer" target="_blank"><i class="fa fa-file-pdf"></i></a>
						</div>
					</div>
					<a id="smothScroll" href="#home" class="fa fa-arrow-up" data-toggle="tooltip" title="Voltar para o topo" data-aos="fade-down" data-aos-offset="0"></a>
				</div>
				<p>Copyright &copy 2021 Silas Rodrigues. Todos os direitos reservados.</p>
			</div>
		</footer>
	<!-- End footer -->

	<!-- Smooth Scroll Function -->
	<script src="../assets/js/smoth-scroll.js"></script>

	<!-- Lightbox -->
	<script src="../assets/js/lightbox-plus-jquery.min.js"></script>

	<!-- Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	<!-- Aos Animate -->
	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	<script src="../assets/js/script.js"></script>


  <script>
  	AOS.init({
  				duration: 1200,
  			});
  </script>


</body>
</html>
