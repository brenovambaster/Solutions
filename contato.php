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
	<link rel="stylesheet" href="css/contato_css.css">
    <title>Contato - Solutions</title>
	<!-- Icone do site -->
	<link rel="icon" href="imgs/logo.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="imgs/logo.ico" type="image/x-icon" />
	
	
  </head>
  <body>
	<?php
	$verifica['index']=false;
	$verifica['Contato']=true;
	include 'menu.php';
	?>
	<img class="img-fluid back" src="imgs/bg-contato.png" alt="banner"></img>
	<div class="col-12">
		<div class="row formula rounded col-12">
		<div class="col-lg-5"></div><!-- Corrigir eixo -->
			<div class="email rounded col-sm-12 col-lg-6" >
				<h1 class="titulos text-warning" style="margin-bottom:-10px;">Fale Conosco</h1><br />
					<form method="POST" action="processa.php" class="text-white">
						<div class="form-group col-sm-5 col-lg-7">
							<label for="exampleFormControlInput1">Nome</label>
							<input type="text" name="nome" class="form-control" id="exampleFormControlInput1" placeholder="Seu nome">
						</div>
						<div class="form-group col-sm-5 col-lg-7">
							<label for="exampleFormControlInput1">Endereço de email</label>
							<input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="nome@exemplo.com">
						</div>
						<div class="form-group col-sm-5 col-lg-7">
							<label for="exampleFormControlInput1">Telefone</label>
							<input type="text" name="fone" class="form-control" id="exampleFormControlInput1" placeholder="(33)988853527">
						</div>
						
						<div class="form-group col-sm-5 col-lg-7">
							<label for="exampleFormControlInput1">Cidade</label>
							<input type="text" name="Cidade" class="form-control" id="exampleFormControlInput1" placeholder="Sua cidade">
						</div>
						
						<div class="form-group col-sm-5 col-lg-6">
							<label for="exampleFormControlTextarea1">Mensagem</label>
							<textarea class="form-control" name="mensagem" id="exampleFormControlTextarea1" rows="4"></textarea>
						</div>
						  <button type="submit" class="btn btn-primary">Enviar</button>
						  
					</form>
					<!--<div class="col">
						<img src="imgs/fale-conosco.png" id="fale-conosco">
					</div> -->
			</div> 
		</div>
		<div class="row rounded">
			<img src="imgs/bg-diego.jpg" class="img-fluid back2"></img>
			<div class="col-lg-4"></div> <!-- Corrigir eixo -->
			<div class="diego rounded col-sm-12 col-lg-4 text-warning">
				<h1 class="titulos"> Diego Pereira</h1><br />
				<h2 style="margin-bottom:-10px;"> Diretor Comercial </h2><br />
					<div class="row bg-light rounded text-dark" style="width:35%; margin-left:10px;">
						<img src="imgs/whatsapp.png" alt="wpp" style="margin-top:5px;"><span> (33) 9 88853527</span><br /> 
					</div>
				<h2 style="margin-bottom:-10px; margin-top:15px">Contate-nos</h2><br />
					<div class="row bg-light rounded text-dark" style="width:75%; margin-top:5px; margin-left:10px;">
						<img src="imgs/email.png" alt="email" style="margin-top:5px;"><span> contato.solutionsenergia@gmail.com</span><br />
					</div>
					<div class="row bg-light rounded text-dark" style="width:85%; margin-top:5px; margin-left:10px;">
						<img src="imgs/local.png" alt="local" style="margin-top:5px;"><span><a href="https://www.google.com.br/maps/place/Cel.+Murta,+MG,+39635-000/@-16.6170746,-42.182923,19.88z/data=!4m5!3m4!1s0x74d0b9055ec2019:0x269bdf2d0aa8c048!8m2!3d-16.6153132!4d-42.1843423" style="text-decoration:none" target="_blank"> Praça Prefeito Inácio Murta, N50 - APTO 102.</a></span><br />
					</div>
			</div>
		</div>
	</div>
	<a href="#" id="subir">
		<button type="button" class="btn btn-secondary" id="voltarTopo"> <!-- botão de voltar ao topo -->
			<img src="imgs/topo.png" style="width:30px">
		</button>  
	</a>
	<div class="rodape">
	<?php
		include 'rodape.php';
	?>
	</div>
	
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/btt.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>