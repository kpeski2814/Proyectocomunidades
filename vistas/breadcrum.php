<?php 
$host     = $_SERVER["HTTP_HOST"];
$url      = $_SERVER["REQUEST_URI"];
$aux      = explode("/", $url);
$urlAux   = explode(".", $aux[3]);
$urlFinal = $urlAux[0];

?>
<div class="breadcum d-flex align-items-center">
<?php
if ($urlFinal == 'inicio') {
	echo '<span class="fas fa-home icon mr-3"><span class="rombo"></span></span>';
} else if ($urlFinal == "registro") {
	echo '<span class="fas fa-folder-open icon mr-3"><span class="rombo"></span></span>';
} else if ($urlFinal == "planDeTrabajo") {
	echo '<span class="far fa-list-alt icon mr-3"><span class="rombo"></span></span>';
} 
?>
<?php echo "<p class='bread-titulo'>" . $urlFinal . "</p>"; ?>
</div>

