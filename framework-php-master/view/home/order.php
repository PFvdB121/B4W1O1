<?php
	$getRider = getRider($rider);
	$getHorse = getHorse($horse);
	$end = addHours($clock, $hours);
	$price = 55 * $hours;
?>
<h1>Afspraak</h1>
<a href="<?=URL?>home/editOrder/<?=$id?>" class="fas fa-pencil-alt">Aanpassen</a>
<a href="<?=URL?>home/destroyOrder/<?=$id?>" class="fas fa-ban">Verwijderen</a>
<ul>
	<li>Dag: <?=$day?></li>
	<li>Tijd: <?=$clock?></li>
	<li>Uur: <?=$hours?></li>
	<li>Einde: <?=$end["ADDTIME('" . $clock . "', '" . $hours . ":00:00')"]?></li>
	<li>Prijs: €<?=$price?></li>
	<li>Paard: <a href="<?=URL?>home/horse/<?=$getHorse['id']?>"><?=$getHorse['name']?></a></li>
	<li>Ruiter: <a href="<?=URL?>home/rider/<?=$getRider['id']?>"><?=$getRider['name']?></a></li>
</ul>