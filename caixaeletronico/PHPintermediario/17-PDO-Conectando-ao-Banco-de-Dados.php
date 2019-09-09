<h1 style="text-align: center; color: blue;">17-PDO: Conectando ao Banco de Dados</h1><hr/>
<h2> Por que n�o usar IF/Else ao inv�s do Try/ Catch?</h2>
<p>Ent�o,
O try catch serve para executar um c�digo de forma "segura", para o caso dele possuir alguma falha, a mesma n�o afetar a estabilidade do aplicativo.Contudo, � prefer�vel usar blocos if sempre que poss�vel, pois o uso excessivo de try catchs al�m de tornar o c�digo dif�cil de depurar e ileg�vel diminui o desempenho da aplica��o. Como? Toda vez que uma exce��o � lan�ada dentro de um bloco try catch, � feito todo um processamento a mais (N�o vou me aprofundar nesta parte)...Voc� deve usar o try catch no caso de saber que um c�digo pode lan�ar uma excess�o, por�m essa excess�o n�o tenha um padr�o muito definido...Resumindo: blocos try catch devem ser usados quando temos um c�digo que pode lan�ar uma exce��o, mas esta exce��o seja dif�cil de prever.</p>

<p>
$dsn = "mysql:dbname=blog;host=127.0.0.1";<br/>
$dbuser = "root";<br/>
$dbpass = "";<br/>
<br/>
try {<br/>
	$pdo = new PDO($dsn, $dbuser, $dbpass);<br/>
	echo "Conex�o estabelecida com sucesso!";<br/>
<br/>
} catch(PDOException $e) {<br/>
	echo "Falhou: ".$e->getMessage();<br/>
}</p>

<?php

$dsn = "mysql:dbname=blog;host=127.0.0.1";
$dbuser = "root";
$dbpass = "";

try {
	$pdo = new PDO($dsn, $dbuser, $dbpass);
	echo "Conex�o estabelecida com sucesso!";

} catch(PDOException $e) {
	echo "Falhou: ".$e->getMessage();
}

?>