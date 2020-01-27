<!doctype html>
<html lang="pt-br">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- CSS da página -->
	<link rel="stylesheet" href="css/global_css.css">
	<link rel="stylesheet" href="css/paginaContato.css">
	<title>Contato - Solutions</title>
	<!-- Icone do site -->
	<link rel="icon" href="imgs/logo.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="imgs/logo.ico" type="image/x-icon" />


</head>

<body>
	<?php
	$verifica['index'] = false;
	$verifica['Contato'] = true;
	include 'menu.php';
	?>
	<div></div>
	<section class="parte1">

		<div class="">
			<div class="row  rounded">
				<div class="col-4"></div><!-- Corrigir eixo -->
				<div class="email rounded col-sm-12 col-lg-6 margem">
					<h1 class="titulos text-center text-warning" style="margin-bottom:-10px;">Fale Conosco</h1><br />
					<form method="POST" action="processa.php" class="text-white">
						<div class="form-group col-sm-5 col-lg-7">
							<label for="exampleFormControlInput1">Nome</label>
							<input type="name" name="nome" class="form-control" id="exampleFormControlInput1" placeholder="Seu nome">
						</div>
						<div class="form-group col-sm-5 col-lg-7">
							<label for="exampleFormControlInput1">Endereço de email</label>
							<input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="nome@exemplo.com">
						</div>
						<div class="form-group col-sm-5 col-lg-7">
							<label for="exampleFormControlInput1">Telefone</label>
							<input type="tex" name="fone" placeholder="(XX) 9 2345-4042" class="form-control" id="exampleFormControlInput1">
						</div>

						<div class="form-group col-sm-5 col-lg-7">
							<label for="exampleFormControlInput1">Cidade</label>
							<input type="text" name="Cidade" class="form-control" id="exampleFormControlInput1" placeholder="Sua cidade">
						</div>

						<div class="form-group col-sm-5 col-lg-7">
							<label for="exampleFormControlTextarea1">Mensagem</label>
							<textarea class="form-control" name="mensagem" id="exampleFormControlTextarea1" rows="5"></textarea>
						</div>
						<div class=" col-sm-5 col-md-6 offset-lg-5">
							<button type="submit" class=" text-center col-md-3  btn btn-primary">Enviar</button>
						</div>

					</form>



				</div>
			</div>
		</div>
	</section>

	<section class="parte2">
		<div class="row responsive">
			<div class="col-3 letras"></div> <!-- corrigir alinhamento   -->
			<div class="autor">
				<div class="card mb-2" style="max-width: 800px; min-height:450px;">
					<div class="row no-gutters">
						<div class="col-md-4">
							<img src="imgs/jack.jpg" class="card-img" alt="...">
						</div>
						<div class="col-md-8">
							<div class="card-body">
								<h5 class="card-title"><b> Diretor Comercial</b></h5>
								<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
								<p class="card-text"><small class="text-muted">Diego Pereira Martins</small></p>
								<p> <img src="imgs/whatsapp.png" alt="email" height="20px" width="20px"> <a href="https://api.whatsapp.com/send?phone=5533988853527&text=Ol%C3%A1!%20Tenho%20interesse%20em%20seus%20servi%C3%A7os">(33) 9 88853527</a>
								</p>
								<p> <img src="imgs/email.png" alt="email" height="20px" width="20px"> <a href="mailto:contato.solutionsenergia@gmail.com">contato.solutionsenergia@gmail.com </a></p>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>


	</section>



	<section id="local">

		<?php

		include 'rodape.php'; //inclui o rodapé
		?>

	</section>
	<a href="#" id="subir">
		<button type="button" class="btn btn-secondary" id="voltarTopo">
			<!-- botão de voltar ao topo -->
			<img src="imgs/topo.png" style="width:30px">
		</button>
	</a>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/btt.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>