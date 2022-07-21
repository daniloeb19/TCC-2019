<!DOCTYPE html>
<html lang="pt-br">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/font-face.css">
	<link rel="stylesheet" href="css/typography.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/main.css">
	<link href="css/scrolling-nav.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/parralax.css">
	<script>
		document.cookie = 'resolution=' + Math.max(screen.width, screen.height) + ("devicePixelRatio" in window ? "," + devicePixelRatio : ",1") + '; path=/';
	</script>
	<title>TCC</title>
</head>

<body id="page-top">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
		<a class="navbar-brand js-scroll-trigger" href="#page-top">TCC</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon">
			</span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">

				<li class="nav-item">
					<a class="nav-link js-scroll-trigger" href="#services">Resumo</a>

				</li>
				<li class="nav-item">
					<a class="nav-link js-scroll-trigger" href="#contact">Objetivos</a>
				</li>
				<li class="nav-item">
					<a class="nav-link js-scroll-trigger" href="#about">
						Alunos
					</a>
				</li>
			</ul>
		</div>
	</nav>

	<header class="bg-primary text-white">
		<div class="container text-center">
			<h1>A nanotecnologia e a inteligência artificial atuando no diagnóstico e tratamento do câncer</h1>
			<p class="lead">Aqui nós falamos um pouco sobre o nosso TCC</p>
		</div>
	</header>

	<section class="works-hex">
		<div class="retangulo">
			<a class="category category-1">
				<div class="wrapper">
					<div class="hexagon">
						<div class="hexagon-in1">
							<div class="hexagon-in2">
								<img class="thumbnail" src="img/img1.jpg" alt="thumbnail">
							</div>
						</div>
					</div>
				</div>
			</a>

			<a class="category category-2">
				<div class="wrapper">
					<div class="hexagon">
						<div class="hexagon-in1">
							<div class="hexagon-in2">
								<img class="thumbnail" src="img/img2.jpg" alt="thumbnail">
							</div>
						</div>
					</div>
				</div>
			</a>
			<a class="category category-3">
				<div class="wrapper">
					<div class="hexagon">
						<div class="hexagon-in1">
							<div class="hexagon-in2">
								<img class="thumbnail" src="img/img3.jpg" alt="thumbnail">
							</div>
						</div>
					</div>
				</div>

			</a>
			<!--category-3-->
		</div>


	</section>
	<section id="services" class="bg-light">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 mx-auto">
					<h2>Resumo</h2>
					<?php include "text1.php"; ?>
				</div>
			</div>
		</div>
	</section>
	<div class="parallax"></div>
	<section id="contact">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 mx-auto">
					<h2>Objetivos</h2>
					<div class="card-group pb-2">
						<div class="card">
							<div class="card-body">
								<p class="card-text">
									Tentar abordar um assunto um tanto quanto delicado e novo, que é a nanomedicina, atuando principalmente contra doenças.
								</p>
							</div>

						</div>
					</div>

					<div class="card-group pb-2">
						<div class="card">
							<div class="card-body">

								<p class="card-text">
									Informar a o grupo escolar de uma forma teórica e prática, vinculando com a nossa base técnica, principalmente das matérias de lógica de programação e de desenvolvimento desktop, o grande avanço que tem tomado a nanomedicina, principalmente na ação do combate ao câncer.
								</p>
							</div>

						</div>
					</div>

					<div class="card-group">
						<div class="card">
							<div class="card-body">
								<p class="card-text">
									Informar aos leitores toda a teoria desse processo, abordando tanto o lado positivo, quanto às possíveis negatividades que essa nova ciência pode trazer, mesmo sendo grande a quantidade de influências positivas, mostraremos o lado neutro de toda a pesquisa para que se obtenha conhecimento da nanotecnologia e dos feitos em relação a células cancerígenas.
								</p>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="parallax"></div>
	<section id="about" class="bg-light">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 mx-auto">
					<h2>EQUIPE</h2>
					<ul style="font-size: 14pt;">
						<?php include "text2.php"; ?>

					</ul>
				</div>
			</div>
		</div>
	</section>

	<footer class="py-5 bg-dark">
		<div class="container">
			<p class="m-0 text-center text-white">Copyright &copy; TCC 2019</p>
		</div>
	</footer>
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
	<script src="js/scrolling-nav.js"></script>
</body>

</html>