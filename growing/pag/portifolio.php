<!DOCTYPE html>
<html>
<head>
	<title>Growing Calculater</title>
	<script type="text/javascript" src="pagscript.js/pagscript.js"></script>
	<link rel="stylesheet" type="text/css" href="pagcss.css/pag.css">
</head>
<body>


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
				<div class="topoint_topoint">
					<!-- <div><a href="#"><img src="../img/facebook.png"></a></div> -->
					<!-- <div><a href="#"><img src="../img/instagran.png"></a></div> -->
					<!-- <div><a href="#"><img src="../img/youtube.png"></a></div> -->
				</div>
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
							<li class="active"><a href="portifolio.php">PORTIFÓLIO</a></li>
							<li><a href="contato.php">CONTATO</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>

	<section id="Portfólio">
		<div>
			<h1>Portfólio</h1>
		</div>


<div class="conteiner">
		<div class="calculator">
			<div>
				<p>Growing calculator&#174;</p>
				<input type="text" id="visor" size="25" />
				<br /><br />
				<input type="submit" class="botao" value="7" onclick="preencher(7);" />
				<input type="submit" class="botao" value="8" onclick="preencher(8);" />
				<input type="submit" class="botao" value="9" onclick="preencher(9);" />	
				<input type="submit" class="botao" value="/" onclick="preencher('/');"/>
				<br/><br/>
			</div>
			<div>
				<input type="submit" class="botao" value="4" onclick="preencher(4);" />
				<input type="submit" class="botao" value="5" onclick="preencher(5);" />
				<input type="submit" class="botao" value="6" onclick="preencher(6);" />	
				<input type="submit" class="botao" value="*" onclick="preencher('*')" />
				<br/><br/>
			</div>		
			<div>
				<input type="submit" class="botao" value="1" onclick="preencher(1);" />
				<input type="submit" class="botao" value="2" onclick="preencher(2);" />
				<input type="submit" class="botao" value="3" onclick="preencher(3);" />		
				<input type="submit" class="botao" value="-" onclick="preencher('-')" />
				<br/><br/>
			</div>
			<div>
				<input type="submit" class="botao" value="0" onclick="preencher(0);" />
				<input type="submit" class="botao" value="=" onclick="calcular();" />
				<input type="submit" class="botao" value="C" onclick="limpar();" />	
				<input type="submit" class="botao" value="+" onclick="preencher('+')" />
				<br/><br/>
			</div>
	</div>

	</section>

		<footer> 
			<div class="final">
				<P>Growing Web Design | Todos os direitos reservados</P>
			</div>
		</footer>
</body>
</html>




























	























</body>
</html>