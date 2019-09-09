<!-- Função DataTempo -->
<?php
$x = time();
echo $x;
?>
<hr/>

<?php
$dataproxima = date('d/m/y', 0);
echo $dataproxima;
?>

<hr/>

<?php
$dataproxima = date('d/m/y', strtotime("+2 days", 0));
echo $dataproxima;
?>