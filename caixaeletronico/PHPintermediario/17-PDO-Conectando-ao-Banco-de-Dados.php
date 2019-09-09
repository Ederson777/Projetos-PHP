<h1 style="text-align: center; color: blue;">17-PDO: Conectando ao Banco de Dados</h1><hr/>
<h2> Por que não usar IF/Else ao invés do Try/ Catch?</h2>
<p>Então,
O try catch serve para executar um código de forma "segura", para o caso dele possuir alguma falha, a mesma não afetar a estabilidade do aplicativo.Contudo, é preferível usar blocos if sempre que possível, pois o uso excessivo de try catchs além de tornar o código difícil de depurar e ilegível diminui o desempenho da aplicação. Como? Toda vez que uma exceção é lançada dentro de um bloco try catch, é feito todo um processamento a mais (Não vou me aprofundar nesta parte)...Você deve usar o try catch no caso de saber que um código pode lançar uma excessão, porém essa excessão não tenha um padrão muito definido...Resumindo: blocos try catch devem ser usados quando temos um código que pode lançar uma exceção, mas esta exceção seja difícil de prever.</p>

<p>
$dsn = "mysql:dbname=blog;host=127.0.0.1";<br/>
$dbuser = "root";<br/>
$dbpass = "";<br/>
<br/>
try {<br/>
	$pdo = new PDO($dsn, $dbuser, $dbpass);<br/>
	echo "Conexão estabelecida com sucesso!";<br/>
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
	echo "Conexão estabelecida com sucesso!";

} catch(PDOException $e) {
	echo "Falhou: ".$e->getMessage();
}

?>