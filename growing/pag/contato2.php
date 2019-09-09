<?php
if(isset($_POST['nome']) && !empty($_POST['nome'])) {

	$nome = addslashes($_POST['nome']);
	$email = addslashes($_POST['email']);
	$msg = addslashes($_POST['msg']);
	$ass = addslashes($_POST['ass']);

	$para = "ederson@growingwebdesign.com";
	$assunto = "Pergunta do Contato";
	$corpo = "Nome: ".$nome." - E-mail: ".$email." - Assunto: ".$ass." - Mensagem: ".$msg;
	$cabecalho = "From: ederson_negocios@yahoo.com.br"."\r\n".
				 "Reply-To: ".$email."\r\n".
				 "X-Mailer: PHP/".phpversion();

	

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
		<p>Assunto:</p>
		<input type="text" name="ass" class="field">
	</div>
	<div class="form-group">
		<label for="msg">Mensagem:</label>
		<textarea type="msg" class="form-check"  placeholder="Escreva sua mensagem" name="msg"></textarea>
	</div>
	<button type="submit" class="btn btn-primary">Enviar</button>
	</form>
</div>



<!-- <div class="container">
	<h2>Registre-se aqui!</h2>
	<form action="/action_page.php">
		<div class="form-group">
  		<label for="nome">Nome:</label>
  		<input type="nome" class="form-control" id="nome" placeholder="Escreva seu nome" name="nome">
  	</div>
	<div class="form-group">
		<label for="email">Email:</label>
		<input type="email" class="form-control" id="email" placeholder="Entre email" name="email">
	</div>	
	<div class="form-group">
		<label for="msg">Mensagem:</label>
		<textarea type="mensagem" class="form-check" id="msg" placeholder="Escreva sua mensagem" name="msg"></textarea>
	</div>	
	<div class="from-group">
		<label for="pwd">Password</label>
		<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">		
	</div>
	<div class="form-group form-check"><br/>
		<label class="form-check-label">
			<input class="form-check-input" type="checkbox" name="remember"> Remenber me
		</label>
	</div>
	<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div> -->





<!-- 
<form action="/action_page.php" method="POST">
	Nome:<br/>
	<input type="text" name="nome" /><br/><br/>

	E-mail:<br/>
	<input type="email" name="email" /><br/><br/>

	Mensagem:<br/>
	<textarea name="msg"></textarea><br/><br/>

	<input type="submit" value="Enviar">
</form> -->

<!-- 


<script type="text/javascript" src="js/jQuery-v3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</body>
</html> -->