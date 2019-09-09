<pre>
Titulo de teste - Bonieky
Titulo 2 renovado - Bonieky

$autor = addslashes($_POST["autor"]); // cuidados relevantes ' or 1=1' //; DROP TABLE posts;
	$sql = "SELECT * FROM posts WHERE autor = '' or 1=1'";
</pre>

<?php // cuidados relevantes ' or 1=1' //; DROP TABLE posts;
	$autor = addslashes($_POST["autor"]);	
	$sql = "SELECT * FROM posts WHERE autor = '$autor'";
?>