<?php 
	session_start();
?>
<!DOCTYPE html>
<html lang="pt_BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Meu nome é Silas Rodrigues e este é meu portfolio com todos os trabalhos já realizados até então, 
	sou programador e desenvolvo aplicações web">
	<meta name="keywords" content="Silas Rodrigues, freelancer, programador, desenvolvedor">
	<meta name="author" content="Silas Rodrigues">
	<title>Portfólio | Silas Rodrigues</title>
	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico">
	<!-- Fonte Awesome and CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.css">
	<link rel="stylesheet" href="../assets/css/icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="../assets/css/bootstrap-4.0.0.css">
	<!-- Animate CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.0/animate.min.css">
	<!-- Reset CSS -->
	<link rel="stylesheet" href="../assets/css/reset.css">

	<!-- My styles -->
	<link rel="stylesheet" href="../assets/css/loader.css">
	<link rel="stylesheet" href="../assets/css/header.css">
	<link rel="stylesheet" href="../assets/css/home.css">
	<link rel="stylesheet" href="../assets/css/services.css">
	<link rel="stylesheet" href="../assets/css/projects.css">
	<link rel="stylesheet" href="../assets/css/carousel.css">
	<link rel="stylesheet" href="../assets/css/certificates.css">
	<link rel="stylesheet" href="../assets/css/form.css">
	<link rel="stylesheet" href="../assets/css/footer.css">
	<link rel="stylesheet" href="../assets/css/style.css">

	<!-- Media Queries -->
	<link rel="stylesheet" href="../assets/css/mediaquery.css">

	<!-- Font Awesome Script -->
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<!-- JQuery Plugin Script -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
	<!-- JQuery Compatible with JQuery Mask-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<!-- JQuery Validator -->
	<script src="../assets/js/jquery.validate.min.js"></script>
	<!-- Validator Messages -->
	<script src="../assets/js/localization/messages_pt_BR.js"></script>
	<!-- Mask Plugin JQuery -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

	<!-- Smooth Scroll Function -->
	<script src="../assets/js/smoth-scroll.js"></script>
 	<script>

	  jQuery(function ($) {

          $.validator.addMethod("alphabetsnspace", function(value, element) {
                return this.optional(element) || /^[a-zA-ZÀ-ú' ]*$/.test(value);
            });

        $("#formContact").validate({
          rules: {
             nome: {
              alphabetsnspace: true,
              minlength: 2,
              maxlength: 15,
              required: true            

             },
             sobrenome: {
              required: true,
              minlength: 3,
              maxlength: 20,
              alphabetsnspace: true
             },
             email: {
              required: true,
              email: true
             },
             celular: {
              required: true,
              minlength: 15
             },
             mensagem: {
              required: true,
              maxlength: 450
             }
          },
          messages:{
             nome: {
              required:"Por favor, informe seu nome",
              alphabetsnspace: "Por favor, apenas letras"
             },
             sobrenome: {
              required:"Por favor, informe seu sobrenome",
              alphabetsnspace: "Por favor, apenas letras"
             },
             email: {
              required:"Por favor, informe seu e-mail para contato"
             },
             celular: {
              required:"Por favor, informe seu número de celular",
              minlength:"Por favor, insira 11 dígitos (somente números)"
             } 
            }
        })
      });
        $("#celular").mask("(00) 00000-0000");
 	</script>
</head>
<body ondragstart="false">
	<!-- Header -->
	<header id="header">
		<div class="header container">
			<div class="nav-bar">
				<div class="brand">
					<div class="logo" data-toggle="tooltip" title="Acesse meu GitHub!" data-aos="zoom-in" data-aos-easing="ease-out-cubic" data-aos-duration="2500" data-aos-offset="0">
						<a href="https://github.com/SilasRodrigues19" target="_blank">
							<img src="https://avatars.githubusercontent.com/u/47532703?s=460&u=baa5f8880cf95f37d4fe235437acfaac247d13ca&v=4" alt="Silas Rodrigues">
						</a>
					</div>
					<a href="#home" class="scroll margin"><h1>Silas <span>Rodrigues</span></h1></a>
				</div>
				<div class="nav-list">
					<div class="menu"><div class="bar"></div></div>
						<ul>
							<li><a class="scroll" href="#services" data-after="Services">Serviços</a></li>
							<li><a class="scroll" href="#projects" data-after="Projects">Projetos</a></li>
							<li><a class="scroll" href="#certificates" data-after="Courses">Certificados</a>
							</li>
							<li><a class="scroll" href="#form" data-after="Contact">Contato</a>
							</li>
						</ul>
				</div>
			</div>
		</div>
	</header>
	<!-- End Header -->

	<!-- Home Section -->
	<section id="home">
		<div id="loader"></div>
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
				<h2>Eu sou <span class="typed-text"></span><span class="cursor typing">&nbsp;</span></h2>
			</div>

			<aside class="social">
				<ul>
					<li>
						<a href="https://whats.link/silasrodrigues21" target="_blank"><i class="fab fa-whatsapp"></i>
							<span>WhatsApp</span>
						</a>
					</li>
					<li>
						<a href="https://twitter.com/Jinuye1" target="_blank"><i class="fab fa-twitter"></i>
							<span>Twitter</span>
						</a>
					</li>
					<li>
						<a href=""><i class="fab fa-linkedin"></i>
							<span>LinkedIn</span>
						</a>
					</li>
					<li>
						<a href="https://github.com/SilasRodrigues19" target="_blank"><i class="fab fa-github"></i>
							<span>GitHub</span>
						</a>
					</li>
				</ul>
			</aside>

		</div>

	</section>
	<!-- End Home Section -->


	<!-- Service Section -->
	<section id="services" >
		<div class="services container">
			<div class="service-top">
				<h1 class="section-title" data-aos="fade-down">
					Habilidades
				</h1>
				<p data-aos="fade-up">Abaixo estão as principais ferramentas e tecnologias que eu utilizo para realizar os serviços prestados.</p>
			</div>
			<div class="service-bottom">
				<div class="service-item" data-aos="fade-up-right">
					<div class="icon">
						<i class="fa fa-code"></i>
					</div>
					<h2 data-aos="fade-down">Web Developer</h2>
					<p data-aos="fade-up">Desenvolvimento de sites com designs modernos e responsivos.</p>
				</div>

				<div class="service-item" data-aos="fade-up-left">
					<div class="icon">
						<i class="fa fa-tools"></i>
					</div>
					<h2 data-aos="fade-down">Tecnologias</h2>
					<p data-aos="fade-up">Algumas das tecnologias e ferramentas que eu utilizo</p>
					<div class="service-imgBx">
						<img data-aos="fade-left" data-aos-duration="900" src="../assets/img/svg/html.svg" alt="HTML Logo" data-toggle="tooltip" title="HTML 5"> 
						<img data-aos="fade-left" data-aos-duration="700" src="../assets/img/svg/css.svg" alt="CSS Logo" data-toggle="tooltip" title="CSS 3">
						<img data-aos="fade-left" data-aos-duration="500" src="../assets/img/svg/javascript.svg" alt="JavaScript Logo"  data-toggle="tooltip" title="JavaScript">
						<img data-aos="fade-left" data-aos-duration="300" src="../assets/img/svg/php.svg" alt="PHP Logo" data-toggle="tooltip" title="PHP">
						<img data-aos="fade-left" data-aos-duration="500" src="../assets/img/svg/mysql.svg" alt="MySQL Logo" data-toggle="tooltip" title="MySQL">
						<img data-aos="fade-left" data-aos-duration="700" src="../assets/img/svg/git.svg" alt="Git Logo"  data-toggle="tooltip" title="Git">
						<img data-aos="fade-left" data-aos-duration="900" src="../assets/img/svg/figma.svg" alt="Figma Logo" data-toggle="tooltip" title="Figma">
						<img data-aos="fade-left" data-aos-duration="1200" src="../assets/img/svg/trello.svg" alt="Trello Logo"  data-toggle="tooltip" title="Trello">
						<img data-aos="fade-left" data-aos-duration="1400" src="../assets/img/svg/bootstrap.svg" alt="Bootstrap Logo"  data-toggle="tooltip" title="Bootstrap">
						<img data-aos="fade-left" data-aos-duration="1600" src="../assets/img/svg/bulma.svg" alt="Bulma Logo"  data-toggle="tooltip" title="Bulma">
						<img data-aos="fade-left" data-aos-duration="1800" src="../assets/img/svg/jquery.svg" alt="jQuery Logo"  data-toggle="tooltip" title="jQuery">
					</div>	
				</div>


				<div class="service-item" data-aos="fade-up-right">
					<div class="icon">
						<i class="fa fa-laptop-house"></i>
					</div>
					<h2 data-aos="fade-down">Projetos</h2>
					<p data-aos="fade-up">Focado em manter a mente ocupada aperfeiçoando o que eu
					sei e buscando aprender tecnologias, linguagens, padrões de desenvolvimento e
				 	inumeras outras coisas com foco em desenvolvimento web.</p>
				</div>

				<div class="service-item" data-aos="fade-up-left">
					<div class="icon">
						<i class="fa fa-file-word"></i>
					</div>
					<h2 data-aos="fade-down">Documentos em ABNT</h2>
					<p data-aos="fade-up">Formatação de TCC's e trabalhos acadêmicos nas normas da Associação Brasileira
					de Normas Técnicas (ABNT)</p>
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
					<hr>
					<p data-aos="fade-right">Os projetos abaixo não possuem nenhum vínculo empregatício</p>
					<hr>
					<p data-aos="fade-left">Clique na imagem para saber mais sobre o respectivo projeto</p>
					<hr>
				</h1>
			</div>
			<div class="all-projects" data-aos="zoom-in">
				<div class="project-item">
					<div class="project-info">
						<!-- Caroussel -->
						<div id="jobsCarousel" class="carousel slide carousel-fade" data-ride="carousel">
							<ol class="carousel-indicators">
							    <li data-target="#jobsCarousel" data-slide-to="0" class="active"></li>
							    <li data-target="#jobsCarousel" data-slide-to="1"></li>
							    <li data-target="#jobsCarousel" data-slide-to="2"></li>
							 </ol>
						  <div class="carousel-inner">
						    <div class="carousel-item active" data-toggle="tooltip" title="Criado para o Streamer Luiz 'SimpSonsS' Gulherme, clique para visualizar!">
						      <a href="http://livedosimpsonss.000webhostapp.com/" target="_blank">
						      	<img class="d-block w-100" src="../assets/img/project1-min.png" alt="Stream do SimpSonsS">
						      </a>
						      <div class="carousel-caption">
						        <h3>Stream do Luiz "SimpSonsS" Guilherme</h3>
						      </div>
						    </div>
						    <div class="carousel-item" data-toggle="tooltip" title="Venda de serviço para jogo online">
						      <a href="https://silasrodrigues19.github.io/JobisonServices/" target="_blank">
						      	<img class="d-block w-100" src="../assets/img/project2-min.png" alt="Jobison Services">
						      </a>
						      <div class="carousel-caption">
						        <h3>Serviço de Elo Job League of Legends</h3>
						      </div>
						    </div>
						    <div class="carousel-item" data-toggle="tooltip" title="Sistema de cadastro de aluno e gerenciamento de cursos, alunos e matriculas">
						      <a href="https://github.com/SilasRodrigues19/PHP-MySQL-DogCursos" target="_blank">
						      	<img class="d-block w-100" src="../assets/img/project3-min.png" alt="Terceiro Slide">
						      </a>
						      <div class="carousel-caption">
						        <h3>Dog Cursos - Matricule-se</h3>
						      </div>
						    </div>
						  </div>
						  <a class="carousel-control-prev" href="#jobsCarousel" role="button" data-slide="prev">
						    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
						    <span class="sr-only">Anterior</span>
						  </a>
						  <a class="carousel-control-next" href="#jobsCarousel" role="button" data-slide="next">
						    <span class="carousel-control-next-icon" aria-hidden="true"></span>
						    <span class="sr-only">Próximo</span>
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
				<p class="hidden">Acesse a versão Desktop para visualizar</p>
				<hr>
			</div>
			<div class="certificate">

			      <table cellpadding="0" cellspacing="0" align="center">
					<tr>
						<td>
							<iframe src="../assets/img/Certificados/bootstrap.pdf#toolbar=0&navpanes=0&scrollbar=0"></iframe>
						</td>
						<td>
							<iframe src="../assets/img/Certificados/git.pdf#toolbar=0&navpanes=0&scrollbar=0"></iframe>
						</td>
						<td>
							<iframe src="../assets/img/Certificados/HTML E CSS.pdf#toolbar=0&navpanes=0&scrollbar=0"></iframe>
						</td>
						<td>
							<iframe src="../assets/img/Certificados/HTML E CSS2.pdf#toolbar=0&navpanes=0&scrollbar=0"></iframe>
						</td>
						<td>
							<iframe src="../assets/img/Certificados/html-basico.pdf#toolbar=0&navpanes=0&scrollbar=0"></iframe>
						</td>
						<td>
							<iframe src="../assets/img/Certificados/jquery.pdf#toolbar=0&navpanes=0&scrollbar=0"></iframe>
						</td>
						<td>
							<iframe src="../assets/img/Certificados/logica.pdf#toolbar=0&navpanes=0&scrollbar=0"></iframe>
						</td>
						<td>
							<iframe src="../assets/img/Certificados/MySQL.pdf#toolbar=0&navpanes=0&scrollbar=0"></iframe>
						</td>
						<td>
							<iframe src="../assets/img/Certificados/php.pdf#toolbar=0&navpanes=0&scrollbar=0"></iframe>
						</td>
						<td>
							<iframe src="../assets/img/Certificados/WebDesign.pdf#toolbar=0&navpanes=0&scrollbar=0"></iframe>
						</td>
					</tr>
				</table>
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
					<hr>
					<p data-aos="fade-up">Me contate por e-mail atravéz do formulário se preferir</p>
				</h1>
			</div>
			<div class="my-form" data-aos="zoom-in-up">
		    <div class="row">
		      <div class="col-12 text-center my-5">
		        <h1 class="display-4"><i class="fa fa-paper-plane" aria-hidden="true"></i> Formulário de Contato</h1>
		      </div>
		    </div>

		    <div class="row justify-content-center mb-5">
		      <div class="col-sm-12 col-md-10 col-lg-8">
		        <form action="../src/mail.php" method="POST" id="formContact">
		          <div class="form-row">
		            <div class="form-group col-sm-6">
		            <label for="nome">Seu nome</label>
		            <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome">
		            </div>

		          	<div class="form-group col-sm-6">
		              <label for="sobrenome">Seu sobrenome</label>
		              <input type="text" class="form-control" name="sobrenome" id="sobrenome" placeholder="Sobrenome">
		            </div>
		          </div>

		          <div class="form-row">
		            <div class="form-group col-sm-6">
		            <label for="email">Seu email</label>
		            <input type="email" class="form-control" name="email" id="email" placeholder="Email">
		            </div>

		          	<div class="form-group col-sm-6">
		              <label for="celular">Seu celular</label>
		              <input type="text" class="form-control" name="celular" id="celular" placeholder="Celular">
		            </div>
		          </div>


		          <div class="form-row">
		            <div class="form-group col-sm-12">
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
							<a href="mailto:silasrodrigues.ti@hotmail.com?subject=Contato Site"><i class="fa fa-envelope"></i></a>
						</div>
					</div>
					
					<div class="contact-item" data-toggle="tooltip" title="Baixe meu curriculo">
						<div data-aos="fade-right" data-aos-offset="0">
							<a href="#cv" download="Curriculo.pdf"><i class="fa fa-file-pdf"></i></a>
						</div>
					</div>
					<a id="smothScroll" href="#home" class="fa fa-arrow-up" aria-hidden="true" data-toggle="tooltip" title="Voltar para o topo" data-aos="fade-down" data-aos-offset="0"></a>
				</div>
				<p>Copyright &copy 2021 Silas Rodrigues. Todos os direitos reservados.</p>
			</div>
		</footer>
	<!-- End footer -->

	<!-- Bootstrap JS -->

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	<script src="../assets/js/script.js"></script>

    <script>
    	AOS.init({
    				duration: 1200,
    			});
    </script>

	
</body>
</html>