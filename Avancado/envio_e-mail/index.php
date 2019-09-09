<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	  <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit-=no">
	  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	  
	  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<br/><br/>


<?php
if(isset($_POST['nome']) && !empty($_POST['nome'])) {

	$nome = addslashes($_POST['nome']);
	$email = addslashes($_POST['email']);
	$msg = addslashes($_POST['msg']);

	$para = "ederson@growingwebdesign.com";
	$assunto = "Pergunta do Contato".$nome;
	$corpo = "Nome: ".$nome." - E-mail: ".$email." - Mensagem: ".$msg;
	$cabecalho = "From: ederson_negocios@yahoo.com.br"."\r\n".
				 "Reply-To: ".$email."\r\n".
				 "X-Mailer: PHP/".phpversion();

	mail($para, $assunto, $corpo, $cabecalho);

	echo "<h2>E-mail enviado com sucesso!</h2>";
	exit;
}
?>
<div class="container">
	<h2>Contate-nós!</h2>
	<form  method="POST">
		<div class="form-group">
  		<label for="nome">Nome:</label>
  		<input type="nome" class="form-control" placeholder="Escreva seu nome" name="nome">
  	</div>
	<div class="form-group">
		<label for="email">Email:</label>
		<input type="email" class="form-control" placeholder="Entre email" name="email">
	</div>	
	<div class="form-group">
		<label for="msg">Mensagem:</label>
		<textarea type="msg" class="form-check"  placeholder="Escreva sua mensagem" name="msg"></textarea>
	</div>
	<button type="submit" class="btn btn-primary">Enviar</button>
	</form>
</div>

<script type="text/javascript" src="js/jQuery-v3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</body>
</html>