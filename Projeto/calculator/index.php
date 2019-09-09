<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="UTF-8"> <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
  <title>Document</title>
</head>
<body> 
	<form style="padding:10px; margin:10px;">
		 <input type="text" name="nome" placeholder="Qual seu nome?" maxlength="100" required> 
		 <input type="submit" value="Enviar"> 
	</form>

<?php 
if(!empty($_GET['nome'])): 
 $texto = addslashes($_GET['nome']);
 echo htmlspecialchars($texto, ENT_QUOTES | ENT_HTML5, 'UTF-8'); 
endif; 
?>
 </body>
 </html>
