<div class="container-fluid topo2">
	<div class="justify-content-between row">
		<div class="logo bg-light rounded col-6 col-sm-4 col-md-4 col-lg-3 col-xl-2 h-100 ">
			<a href="index.php"><img src="imgs/logo_sf.png" class="col-12 " alt="Solutions Energia"></a>
		</div>
		<div class="navegador rounded col-5 col-sm-4 col-md-4 col-lg-6 col-xl-6 h-100">
			<nav class="navbar navbar-expand-lg  ">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
					<a class="navbar-brand" href="#">
						<img src="imgs/menu.png" alt="Menu Solutions">
					</a><a class="navbar-brand" href="#"> <b class="text-primary">Menu</b> </a>
				</button>
				<div class="collapse navbar-collapse justify-content-right hovermouse " id="collapsibleNavbar">
					<!-- Lista de itens do navbar -->
					<ul class="nav nav-pills navbar-nav">
						<li class="nav-item">
							<a id="inicio" <?php if ($verifica['index'] == true) {
												echo "class='nav-link ap'";
											} else {
												echo "class='nav-link opc'";
											} ?> href="index.php"> Início</a>
						</li>
						<li class="nav-item">
							<a class="nav-link opc" href="index.php#sobre"> Sobre Nós </a>
						</li>
						<li class="nav-item">
							<a class="nav-link opc" href="index.php#servicos"> Serviços </a>
						</li>
						<li class="nav-item">
							<a id="Contato" <?php if ($verifica['Contato'] == true) {
												echo "class='nav-link ap'";
											} else {
												echo "class='nav-link opc'";
											} ?> href="contato.php"> Contato </a>
						</li>
						<li class="nav-item">
							<a class="nav-link opc" href="index.php#local"> Nossa localização</a>
						</li>
						<li class="nav-item">
							<a class="nav-link opc" href="index.php#parceiros"> Parceiros </a>
						</li>

					</ul>
				</div>
			</nav>
		</div>
	</div>
</div>
<!-- Fim do Cabeçalho -->