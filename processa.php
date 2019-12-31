<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<!-- CSS da página -->
		<link rel="stylesheet" href="css/global_css.css">
        <title></title>
    </head>
    <body>
        <?php
		if(isset($_POST['email']) && !empty($_POST['email'])) {
			$nome = $_POST['nome'];
			$email = $_POST['email'];
			$mensagem = $_POST['mensagem'];
			
			require 'vendor/autoload.php';

			$from = new SendGrid\Email(null, "mineking.corone@gmail.com");
			$subject = "Mensagem de contato";
			$to = new SendGrid\Email(null, "hugocorone10@gmail.com");
			$content = new SendGrid\Content("text/html", "Olá Hugo, <br><br>Nova mensagem de contato<br><br>Nome: $nome<br>Email: $email <br>Mensagem: $mensagem");
			$mail = new SendGrid\Mail($from, $subject, $to, $content);
			
			//Necessário inserir a chave
			$apiKey = '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';
			$sg = new \SendGrid($apiKey);

			if($response = $sg->client->mail()->send()->post($mail)){
				header('refresh:3;contato.php');
				?><div class="alert alert-success" role="alert">
					Email enviado com sucesso!
				</div>
				<?php
			}
			else{
				header('refresh:3;contato.php');
				?>
				<div class="alert alert-danger" role="alert">
					Ocorreu um erro inesperado! Por favor, tente mais tarde.
				</div>
				<?php	
			}
		}
		else{
			header('refresh:3;contato.php');
			?>
			<div class="alert alert-danger" role="alert">
				O campo email é obrigatório! Por favor, preencha-o.
			</div>
			<a href="contato.php"> <button type="button" class="btn btn-primary">Voltar</button> </a>
			<?php	
			
		}
		
        ?>
    </body>
</html>
