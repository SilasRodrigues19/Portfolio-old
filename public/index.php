<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt">

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
	<link rel="apple-touch-icon" sizes="180x180" href="../assets/img/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="../assets/img/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="../assets/img/favicon-16x16.png">
	<link rel="manifest" href="../site.webmanifest">
	<link rel="shortcut icon" type="image/png" href="../public/favicon.ico">

	<!-- Bootstrap 4.0.0 -->
	<link rel="preload" href="../assets/css/bootstrap.css" as="style">
	<link rel="stylesheet" href="../assets/css/bootstrap.css">

	<!-- Reset CSS -->
	<link rel="preload" href="../assets/css/reset.css" as="style">
	<link rel="stylesheet" href="../assets/css/reset.css">

	<!-- Sweet Alert CSS -->
	<link rel="preload" href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" as="style">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css">

	<!-- Aos Animate CSS -->
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

	<!-- Swipper CSS -->
	<link rel="preload" href="https://unpkg.com/swiper/swiper-bundle.min.css" as="style">
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

	<!-- My styles -->
	<link rel="preload" href="../assets/css/style.css" as="style">
	<link rel="preload" href="../assets/css/header.css" as="style">
	<link rel="preload" href="../assets/css/home.css" as="style">
	<link rel="preload" href="../assets/css/services.css" as="style">
	<link rel="preload" href="../assets/css/projects.css" as="style">
	<link rel="preload" href="../assets/css/carousel.css" as="style">
	<link rel="preload" href="../assets/css/certificates.css" as="style">
	<link rel="preload" href="../assets/css/form.css" as="style">
	<link rel="preload" href="../assets/css/footer.css" as="style">
	<link rel="preload" href="../assets/css/loader.css" as="style">

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
	<link rel="preload" href="../assets/css/mediaquery.css" as="style">
	<link rel="stylesheet" href="../assets/css/mediaquery.css">

	<!-- Fonte Awesome and Icons CSS -->
	<link rel="preload" href="../assets/css/icons.css" as="style">
	<link rel="stylesheet" href="../assets/css/icons.css">

	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Kodchasan:wght@200;300&display=swap" rel="stylesheet">

	<!-- Lightbox -->
	<link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" as="style">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">

	<!-- JQuery Compatible with JQuery Mask-->
	<link rel="preload" href="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js" as="script">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

	<!-- JQuery Validator -->
	<link rel="preload" href="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js" as="script">
	<script defer src="../assets/js/jquery.validate.min.js"></script>

	<!-- Mask Plugin JQuery -->
	<link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" as="script">
	<script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

	<!-- Form Validator -->
	<link rel="preload" href="../assets/js/formvalidator.js" as="script">
	<script defer src="../assets/js/formvalidator.js"></script>

	<!-- Validator Messages -->
	<link rel="preload" href="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/localization/messages_ptbr.js" as="script">
	<script defer src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/localization/messages_ptbr.js"></script>
	<!-- Scripts need to be imported before </head> to resolve validation messages error -->
</head>

<body ondragstart="false">
	<!-- Header -->
	<header id="header">
		<div class="header container">
			<div class="nav-bar">
				<div class="brand">
					<a href="#home" class="scroll margin">
						<h1>Silas <span>Rodrigues</span></h1>
					</a>
				</div>
				<div class="nav-list">
					<!-- Mobile Menu -->
					<input id="hamburger" type="checkbox">
					<label for="hamburger">
						<div class="menu" aria-label="Abrir Menu" aria-haspopup="true" aria-controls="mobileExpanded" aria-expanded="false">
							<div class="bar"></div>
						</div>
					</label>
					<ul id="mobileExpanded" role="menu">
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
				if (isset($_SESSION['msg'])) {
					echo $_SESSION['msg'];
					unset($_SESSION['msg']);
				}
				?>
				<h1 class="infoText">Olá,</h1>
				<h1 class="infoText">Seja bem-vindo(a)</h1>
				<h1 class="infoText">Conheça meu</h1>
				<a href="#projects" type="button" class="cta scroll" data-toggle="tooltip" title="Clique e veja meus projetos!">
					<span class="iconify portfolioIcon" data-icon="dashicons:portfolio" data-inline="false"></span>Portfolio
				</a>
				<h2 class="arrayText">Eu sou <span class="typed-text"></span><span class="cursor typing">&nbsp;</span></h2>
			</div>

			<div class="rightButton">
				<span class="iconify" data-icon="flat-color-icons:down-right"></span>
			</div>
			<aside class="social">
				<span class="socialBtn">
					<span class="socialText">Sociais</span>
				</span>
				<div class="iconsBox">
					<i>
						<a href="https://api.whatsapp.com/send?phone=5519986024827" target="_blank" rel="noreferrer">
							<span class="iconify whatsapp" data-icon="whh:whatsapp" data-inline="false"></span>
						</a>
					</i>
					<i>
						<a href="https://twitter.com/Jinuye1" target="_blank" rel="noreferrer">
							<span class="iconify twitter" data-icon="websymbol:twitter-bird" data-inline="false"></span>
						</a>
					</i>
					<i>
						<a href="https://www.linkedin.com/in/silasrodrigues19" target="_blank" rel="noreferrer">
							<span class="iconify linkedin" data-icon="line-md:linkedin"></span>
						</a>
					</i>
					<i>
						<a href="https://codepen.io/SilasRodrigues19" target="_blank" rel="noreferrer">
							<span class="iconify codepen" data-icon="mdi:codepen" data-inline="false"></span>
						</a>
					</i>
					<i>
						<a href="https://github.com/SilasRodrigues19" target="_blank" rel="noreferrer">
							<span class="iconify github" data-icon="eva:github-fill" data-inline="false"></span>
						</a>
					</i>
				</div>
			</aside>
		</div>
	</section>
	<!-- End Home Section -->

	<!-- Service Section -->
	<section id="services">
		<div class="section-title">
			<h1 data-aos="fade-down">Conhecimentos</h1>
			<p data-aos="fade-up">Abaixo estão as principais ferramentas e tecnologias que eu utilizo nos meus projetos.</p>
			<hr data-aos="fade-down">
		</div>
		<div class="knowledge-wrapper">
			<div class="knowledge" data-aos="fade-left" data-aos-duration="900">
				<div class="knowledge-header">
					<div class="knowledge-icons" data-toggle="tooltip" title="HTML 5">
						<span class="iconify" data-icon="bx:bxs-file-html" data-inline="false"></span>
					</div>
					<p>Linguagem de marcação de texto para estruturar e apresentar páginas web.</p>
				</div>
			</div>
			<div class="knowledge" data-aos="fade-left" data-aos-duration="900">
				<div class="knowledge-header">
					<div class="knowledge-icons" data-toggle="tooltip" title="CSS 3">
						<span class="iconify" data-icon="fluent:document-css-24-regular" data-inline="false"></span>
					</div>
					<p>Utilizado para estilizar a aparência de uma página, animar, usar transições e afins.</p>
				</div>
			</div>
			<div class="knowledge" data-aos="fade-left" data-aos-duration="900">
				<div class="knowledge-header">
					<div class="knowledge-icons" data-toggle="tooltip" title="JavaScript ES6">
						<span class="iconify" data-icon="fluent:document-javascript-24-filled" data-inline="false"></span>
					</div>
					<p>Linguagem de programação que permite a criação de conteúdos dinâmicos e deixá-lo mais interativo.</p>
				</div>
			</div>
			<div class="knowledge" data-aos="fade-left" data-aos-duration="900">
				<div class="knowledge-header">
					<div class="knowledge-icons" data-toggle="tooltip" title="React JS">
						<span class="iconify" data-inline="false" data-icon="cib:react"></span>
					</div>
					<p>React JS é uma biblioteca JavaScript para a criação de interfaces de usuário ou UI (user interface).</p>
				</div>
			</div>
			<div class="knowledge" data-aos="fade-left" data-aos-duration="900">
				<div class="knowledge-header">
					<div class="knowledge-icons" data-toggle="tooltip" title="MySQL">
						<span class="iconify" data-inline="false" data-icon="whh:mysqltwo"></span>
					</div>
					<p>O MySQL é um sistema de gerenciamento de banco de dados, que utiliza a linguagem SQL.</p>
				</div>
			</div>
			<div class="knowledge" data-aos="fade-left" data-aos-duration="900">
				<div class="knowledge-header">
					<div class="knowledge-icons" data-toggle="tooltip" title="JQuery">
						<span class="iconify" data-inline="false" data-icon="cib:jquery"></span>
					</div>
					<p>jQuery é uma biblioteca JavaScript que facilita a manipulação de eventos, animações, HTML e utilização de AJAX</p>
				</div>
			</div>
			<div class="knowledge" data-aos="fade-left" data-aos-duration="900">
				<div class="knowledge-header">
					<div class="knowledge-icons" data-toggle="tooltip" title="Figma">
						<span class="iconify" data-icon="akar-icons:figma-fill" data-inline="false"></span>
					</div>
					<p>O Figma é uma ferramenta de design para interfaces, que oferece a possibilidade de trabalho colaborativo.</p>
				</div>
			</div>
			<div class="knowledge" data-aos="fade-left" data-aos-duration="900">
				<div class="knowledge-header">
					<div class="knowledge-icons" data-toggle="tooltip" title="Bulma">
						<span class="iconify" data-inline="false" data-icon="mdi:bulma"></span>
					</div>
					<p>Bulma é um framework CSS totalmente gratuito, inspirado no Bootstrap e baseado em Flexbox, que já tem uma compatibilidade bem grande entre os navegadores.</p>
				</div>
			</div>
			<div class="knowledge" data-aos="fade-left" data-aos-duration="900">
				<div class="knowledge-header">
					<div class="knowledge-icons" data-toggle="tooltip" title="PHP 7">
						<span class="iconify" data-inline="false" data-icon="file-icons:php"></span>
					</div>
					<p>PHP é uma linguagem de programação web que favorece a conexão entre os servidores e a interface do usuário.</p>
				</div>
			</div>
			<div class="knowledge" data-aos="fade-left" data-aos-duration="900">
				<div class="knowledge-header">
					<div class="knowledge-icons" data-toggle="tooltip" title="Git">
						<span class="iconify" data-inline="false" data-icon="cib:git"></span>
					</div>
					<p>Git é um sistema de controle de versão de projetos.</p>
				</div>
			</div>
			<div class="knowledge" data-aos="fade-left" data-aos-duration="900">
				<div class="knowledge-header">
					<div class="knowledge-icons" data-toggle="tooltip" title="Bootstrap">
						<span class="iconify" data-inline="false" data-icon="fa-brands:bootstrap"></span>
					</div>
					<p>Bootstrap é um framework CSS moderno que organiza e gerencia o layout de um site.</p>
				</div>
			</div>
			<div class="knowledge" data-aos="fade-left" data-aos-duration="900">
				<div class="knowledge-header">
					<div class="knowledge-icons" data-toggle="tooltip" title="SASS">
						<span class="iconify" data-inline="false" data-icon="cib:sass-alt"></span>
					</div>
					<p>SASS é uma linguagem de extensão ao CSS que dá um controle mais profissional e dinâmico.</p>
				</div>
			</div>
			<div class="knowledge" data-aos="fade-left" data-aos-duration="900">
				<div class="knowledge-header">
					<div class="knowledge-icons" data-toggle="tooltip" title="Styled Components">
						<span class="iconify" data-inline="false" data-icon="file-icons:styledcomponents"></span>
					</div>
					<p>É uma biblioteca que permite utilizar CSS-in-JS e é muito comum de ser utilizada com ReactJS.</p>
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
					<img data-aos="fade-up" class="programmer" src="../assets/img/programmer.webp" width="500px" height="450px" loading="lazy" alt="Programador">
				</h1>
			</div>

			<!-- Swiper -->
			<div class="all-projects" data-aos="zoom-out">
				<div class="project-item">
					<div class="project-info">
						<div class="swiper mySwiper">
							<div class="swiper-wrapper">
								<!-- Project 1 -->
								<div class="swiper-slide">
									<div class="wrapper">
										<a href="https://github.com/SilasRodrigues19/silasdev.epizy.com" target="_blank">
											<div class="carousel">
												<figure data-toggle="tooltip" title="Meu portfólio" style="background: url('https://i.ibb.co/WHsSZcs/portfoliofullpage.webp'); background-size: cover; background-position: top center; --speed: 3.5s;">
													<i>
														<ion-icon data-toggle="tooltip" title="Veja no GitHub" name="logo-octocat"></ion-icon>
													</i>
												</figure>
												<figcaption class="carousel-info">
													<h2>Portfólio</h2>
												</figcaption>
											</div>
										</a>
									</div>
								</div>
								<!-- Project 2 -->
								<div class="swiper-slide">
									<div class="wrapper">
										<a href="https://axie-infinity-lp.vercel.app" target="_blank">
											<div class="carousel">
												<figure data-toggle="tooltip" title="Axie Infinity Landing Page" style="background: url('https://i.ibb.co/x2DpCtV/axiefullpage.webp'); background-size: cover; background-position: top center; --speed: 3.5s;">
													<i>
														<ion-icon name="open-outline"></ion-icon>
													</i>
												</figure>
												<figcaption class="carousel-info">
													<h2>Axie Infinity Landing Page Fictícia</h2>
												</figcaption>
											</div>
										</a>
									</div>
								</div>
								<!-- Project 3 -->
								<div class="swiper-slide">
									<div class="wrapper">
										<a href="http://siimpsonss.vercel.app" target="_blank">
											<div class="carousel">
												<figure data-toggle="tooltip" title="Stream do SimpSonsS" style="background: url('https://i.ibb.co/5rwpGBN/simpfullpage.webp'); background-size: cover; background-position: top center; --speed: 3.5s;">
													<i>
														<ion-icon name="open-outline"></ion-icon>
													</i>
												</figure>
												<figcaption class="carousel-info">
													<h2>Stream do Luiz "SimpSonsS" Guilherme</h2>
												</figcaption>
											</div>
										</a>
									</div>
								</div>
								<!-- Project 4 -->
								<div class="swiper-slide">
									<div class="wrapper">
										<a href="https://weatherproject.vercel.app" target="_blank">
											<div class="carousel">
												<figure data-toggle="tooltip" title="Weather App" style="background: url('https://i.ibb.co/ygnbXDf/weather.webp'); background-size: cover; background-position: top center; --speed: 3.5s;">
													<i>
														<ion-icon name="open-outline"></ion-icon>
													</i>
												</figure>
												<figcaption class="carousel-info">
													<h2>Consutando previsão do tempo Weather App</h2>
												</figcaption>
											</div>
										</a>
									</div>
								</div>
								<!-- Project 5 -->
								<div class="swiper-slide">
									<div class="wrapper">
										<a href="http://dogcursos.epizy.com/" target="_blank">
											<div class="carousel">
												<figure data-toggle="tooltip" title="Dog Cursos" style="background: url('https://i.ibb.co/SxqGC31/dogcursos.webp'); background-size: cover; background-position: top center; --speed: 3.5s;">
													<i>
														<ion-icon name="open-outline"></ion-icon>
													</i>
												</figure>
												<figcaption class="carousel-info">
													<h2>Sistema de cadastro de alunos e gerenciamento de matrículas</h2>
												</figcaption>
											</div>
										</a>
									</div>
								</div>
								<!-- Project 6 -->
								<div class="swiper-slide">
									<div class="wrapper">
										<a href="https://github.com/SilasRodrigues19/Google-News-API" target="_blank">
											<div class="carousel">
												<figure data-toggle="tooltip" title="Brazil Headlines" style="background: url('https://i.ibb.co/5s6Bg9B/googlefullpage.webp'); background-size: cover; background-position: top center; --speed: 3.5s;">
													<i>
														<ion-icon data-toggle="tooltip" title="Veja no GitHub" name="logo-octocat"></ion-icon>
													</i>
												</figure>
												<figcaption class="carousel-info">
													<h2>Consultando notícias com a API do Google News</h2>
												</figcaption>
											</div>
										</a>
									</div>
								</div>
								<!-- Project 7 -->
								<div class="swiper-slide">
									<div class="wrapper">
										<a href="#" target="_blank">
											<div class="carousel">
												<figure data-toggle="tooltip" title="Consulte perfis no GitHub" style="background: url('https://i.ibb.co/fQkPF6C/githubfullpage.webp'); background-size: cover; background-position: top center; --speed: 3.5s;">
													<i>
														<ion-icon name="open-outline"></ion-icon>
													</i>
												</figure>
												<figcaption class="carousel-info">
													<h2>Consulte perfis do GitHub</h2>
												</figcaption>
											</div>
										</a>
									</div>
								</div>
								<!-- Project 8 -->
								<div class="swiper-slide">
									<div class="wrapper">
										<a href="#" target="_blank">
											<div class="carousel">
												<figure data-toggle="tooltip" title="Sistema de cadastro" style="background: url('https://i.ibb.co/tDVNk0m/loginfullpage.webp'); background-size: cover; background-position: top center; --speed: 3.5s;">
													<i>
														<ion-icon name="logo-octocat"></ion-icon>
													</i>
												</figure>
												<figcaption class="carousel-info">
													<h2>Sistema de cadastro de itens</h2>
												</figcaption>
											</div>
										</a>
									</div>
								</div>
								<!-- Project 9 -->
								<div class="swiper-slide">
									<div class="wrapper">
										<a href="#" target="_blank">
											<div class="carousel">
												<figure data-toggle="tooltip" title="Cadastro de clientes" style="background: url('https://i.ibb.co/DfgkBq5/cadastrofullpage.webp'); background-size: cover; background-position: top center; --speed: 3.5s;">
													<i>
														<ion-icon name="logo-octocat"></ion-icon>
													</i>
												</figure>
												<figcaption class="carousel-info">
													<h2>Cadastro e exibição de clientes</h2>
												</figcaption>
											</div>
										</a>
									</div>
								</div>
							</div>
							<div class="swiper-pagination"></div>
							<div class="swiper-button-next"></div>
							<div class="swiper-button-prev"></div>
						</div>
					</div>
				</div>
			</div>

	</section>
	<!-- End Projects Section -->

	<!-- Certificate Section -->
	<section id="certificates">
		<div class="certificates container">
			<div class="certificate-header">
				<h1 class="section-title" data-aos="fade-down">Certificados</h1>
				<hr data-aos="fade-down">
			</div>
			<div class="certificate" data-aos="fade-up">
				<a href="../assets/img/certificados/responsive-web-design.webp" data-lightbox="mygallery" data-title="FreeCodeCamp Responsive Web Design">
					<img src="../assets/img/certificados/responsive-web-design.webp" width="200" height="150" loading="lazy" alt="FreeCodeCamp Responsive Web Design" data-aos="fade-up">
				</a>
				<a href="../assets/img/certificados/git.webp" data-lightbox="mygallery" data-title="Git">
					<img src="../assets/img/certificados/git.webp" width="200" height="150" loading="lazy" alt="Certificado Git" data-aos="fade-up">
				</a>
				<a href="../assets/img/certificados/HTML-CSS.webp" data-lightbox="mygallery" data-title="HTML e CSS">
					<img src="../assets/img/certificados/HTML-CSS.webp" width="200" height="150" loading="lazy" alt="Certificado HTML e CSS" data-aos="fade-up">
				</a>
				<a href="../assets/img/certificados/jquery.webp" data-lightbox="mygallery" data-title="jQuery">
					<img src="../assets/img/certificados/jquery.webp" width="200" height="150" loading="lazy" alt="Certificado jQuery" data-aos="fade-up">
				</a>
				<a href="../assets/img/certificados/logica.webp" data-lightbox="mygallery" data-title="Lógica">
					<img src="../assets/img/certificados/logica.webp" width="200" height="150" loading="lazy" alt="Certificado Lógica" data-aos="fade-up">
				</a>
				<a href="../assets/img/certificados/MySQL.webp" data-lightbox="mygallery" data-title="MySQL">
					<img src="../assets/img/certificados/MySQL.webp" width="200" height="150" loading="lazy" alt="Certificado MySQL" data-aos="fade-up">
				</a>
				<a href="../assets/img/certificados/php.webp" data-lightbox="mygallery" data-title="PHP">
					<img src="../assets/img/certificados/php.webp" width="200" height="150" loading="lazy" alt="Certificado PHP" data-aos="fade-up">
				</a>
				<a href="../assets/img/certificados/WebDesign.webp" data-lightbox="mygallery" data-title="Web Design">
					<img src="../assets/img/certificados/WebDesign.webp" width="200" height="150" loading="lazy" alt="Certificado Web Design" data-aos="fade-up">
				</a>
				<a href="../assets/img/certificados/html-full.webp" data-lightbox="mygallery" data-title="HTML Full Course">
					<img src="../assets/img/certificados/html-full.webp" width="200" height="150" loading="lazy" alt="Certificado HTML Completo" data-aos="fade-up">
				</a>
				<a href="../assets/img/certificados/css-full.webp" data-lightbox="mygallery" data-title="CSS Full Course">
					<img src="../assets/img/certificados/css-full.webp" width="200" height="150" loading="lazy" alt="Certificado CSS Completo" data-aos="fade-up">
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
						<h1 class="display-4">
							<i class="fa fa-paper-plane">
								<span class="iconify" data-icon="si-glyph:paper-plane" data-inline="false"></span>
							</i>
							Formulário de Contato
						</h1>
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
							<!-- End Name and Surname rows -->

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
							<!-- End Email and Phone rows -->

							<div class="form-row">
								<div class="form-group col-sm-12">
									<!-- Message -->
									<label for="mensagem">Sua mensagem</label>
									<textarea class="form-control" name="mensagem" id="mensagem" cols="30" rows="10" placeholder="Sinta-se a vontade" onkeyup="countLetters();"></textarea>
								</div>
							</div>
							<!-- End Message row -->
							<div class="form-row">
								<div class="col-sm-12">
									<input type="submit" class="btn btn-secondary form-control" name="btnSubmit" value="Enviar">
								</div>
								<div class="form-group col-sm-12">
									<br>
									<!-- Warning -->
									<label>Total de digitos: <span class="count">0</span>
										<p>Limite de 1500 caracteres</p>
									</label>
								</div>
							</div>
							<!-- End button and warning label row -->
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
						<span class="iconify globe-americas" data-icon="gis:earth-america" data-inline="false"></span>
					</div>
				</div>

				<div class="contact-item" data-toggle="tooltip" title="Me contate por e-mail">
					<div data-aos="fade-up" data-aos-offset="0">
						<a href="mailto:silasrodrigues.ti@hotmail.com?subject=Contato%20Site">
							<span class="iconify envelope" data-icon="emojione-monotone:closed-mailbox-with-lowered-flag" data-inline="false"></span>
						</a>
					</div>
				</div>

				<div class="contact-item" data-toggle="tooltip" title="Veja meu curriculo">
					<div data-aos="fade-right" data-aos-offset="0">
						<a href="../curriculo.pdf" target="_blank">
							<span class="iconify file-pdf" data-icon="bi:file-earmark-pdf-fill" data-inline="false"></span>
						</a>
					</div>
				</div>
				<a id="smoothScroll" href="#home" data-aos="fade-down" data-aos-offset="0">
					<span class="iconify arrow-up" data-icon="bytesize:chevron-top" data-inline="false"></span>
				</a>
			</div>
			<p>Copyright &copy 2020-Present Silas Rodrigues. Todos os direitos reservados.</p>
		</div>
	</footer>
	<!-- End footer -->

	<!-- Icons Script -->
	<script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>

	<!-- Smooth Scroll Function -->
	<script src="../assets/js/smooth-scroll.js"></script>

	<!-- Lightbox -->
	<script src="../assets/js/lightbox-plus-jquery.min.js"></script>

	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

	<!-- Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	<!-- Aos Animate -->
	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	<script src="../assets/js/script.js"></script>

	<!-- Swiper JS -->
	<link rel="preload" href="https://unpkg.com/swiper/swiper-bundle.min.js" as="script">
	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

	<!-- Initialize Swiper -->
	<script>
		var swiper = new Swiper(".mySwiper", {
			navigation: {
				nextEl: ".swiper-button-next",
				prevEl: ".swiper-button-prev",
			},
			pagination: {
				el: '.swiper-pagination',
				type: 'bullets',
				clickable: true,
			},
		});

		AOS.init({
			duration: 1200,
		});
	</script>


</body>

</html>