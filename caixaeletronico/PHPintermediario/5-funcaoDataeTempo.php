<?php
$dataatual = date("d");
echo $dataatual;

?>
<!-- php.net/manuel/pt_BR/function.date.php -->
<hr/>
<?php // formato Brazil
$dataatual = date("d/m/y");
echo $dataatual;
?>

<hr/>
<?php // formato Brazil
$dataatual = date("d/m/y H:i:s");
echo $dataatual;
?>

<hr/>
<?php // formato Brazil
$dataatual = date("d/m/y \à\s H:i:s"); // mês e hora, com nome no meio.
echo $dataatual;
?>

<hr/> 
<?php // formato americano
$dataatual = date("m-d-y");
echo $dataatual;
echo "formato americano";

?>