<!DOCTYPE html>
<html>
<head>
	<title>Growing Web Design</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,user-scalable=0" />
	<link rel="stylesheet" type="text/css" href="pagcss.css/pag.css">
	<script type="text/javascript">
		window.onload = function(){
			document.querySelector(".menuMobile").addEventListener("click", function(){
				if(document.querySelector(".menu nav ul").style.display == 'flex') {
					document.querySelector(".menu nav ul").style.display = 'none';
				} else {
					document.querySelector(".menu nav ul").style.display = 'flex';
				}
			});
		};
	</script>
</head>
<body>
	<!-- https://api.whatsapp.com/send?L=pt&phone=5591991180891 -->
	<div class="whatsapp">
	    <a href="https://api.whatsapp.com/send?l=pt&amp;phone=5591991180891" target="blank"><img src="../img/what.png" style="height:50px; position:fixed; bottom: 25px; right: 25px; z-index:100;" data-selector="img"></a>
	</div>
	<header>
		<div class="topo">
			<div class="topoint">
				<!-- <div><a href=""><p>CLIENTE</p></a></div> -->
				<!-- <div class="topoint_topoint">
					<div><a href="#"><img src="../img/facebook.png"></a></div>
					<div><a href="#"><img src="../img/instagran.png"></a></div>
					<div><a href="#"><img src="../img/youtube.png"></a></div>
				</div> -->
				<div><a href="pag/logn.php"><p>Sistema</p></a></div>
			</div>
		</div>
		<div class="container">
			<div class="container_int">
				<div class="logo">
				 	<a href="../index.html"><img src="../img/logo.png"></a>
				 	<h1>Plante uma ideia, colha grandes resultados.</h1>
				</div>
				<div class="menu">
					<nav>
						<div class="menuMobile">
							<div class="mm_line"></div>
							<div class="mm_line"></div>
							<div class="mm_line"></div>
						</div>
						<ul>
							<li><a href="../index.html">HOME</a></li>
							<li><a href="sobre.html">SOBRE</a></li>
							<li><a href="portifolio.php">PORTIFÓLIO</a></li>
							<li class="active"><a href="">CONTATO</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>

<?php
if(isset($_POST['nome']) && !empty($_POST['nome'])) {

	$nome = addslashes($_POST['nome']);
	$email = addslashes($_POST['email']);
	$msg = addslashes($_POST['msg']);
	$ass = addslashes($_POST['ass']);

	$para = "ederson@growingwebdesign.com";
	$assunto = "Pergunta do Contato: ".$nome;
	$corpo = "Nome: ".$nome." - E-mail: ".$email." - Assunto: ".$ass." - Mensagem: ".$msg;
	$cabecalho = "From: "."\r\n".
				 "Reply-To: ".$email."\r\n".
				 "X-Mailer: PHP/".phpversion();

	mail($para, $assunto, $corpo, $cabecalho, $ass);

	echo "<h2>E-mail enviado com sucesso!</h2>";
	exit;
}
?>
<section class="formulário">
			<h2>Contate-nos</h2>
			<form method="POST">
				<p>Nome:</p>
				<input type="text" class="field" name="nome"> <br/>

				<p>E-mail:</p>
				<input type="text" class="field" name="email"> <br/>

				<p>Assunto:</p>
				<input type="text" name="ass" class="field">				

				<p>Mensagem:</p>
				<textarea class="field" name="msg"></textarea> <br/>

				<p class="center-content">
					<input type="submit" class="btn-btn-green" value="Enviar Dados">
				</p>
			</form>
		</section>

		<footer> 
			<div class="final">
				<P>Growing Web Design | Todos os direitos reservados</P>
			</div>
		</footer>
</body>
</html>