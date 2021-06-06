<?php
	$orders = ordersRider($id);
?>

<h1><?=$name?></h1>
<a href="<?=URL?>home/editRider/<?=$id?>" class="fas fa-pencil-alt">Aanpassen</a>
<a href="<?=URL?>home/destroyRider/<?=$id?>" class="fas fa-ban">Verwijderen</a>
<ul>
	<li>Leeftijd: <?=$age?></li>
	<li>Geslacht: <?=$gender?></li>
	<li>Stad: <?=$city?></li>
	<li>Adres: <?=$streetnumber?> <?=$housenumber?></li>
	<li>Telefoonnummer: <?=$telephone?></li>
	<?php
		if (!empty($orders)) {
	?>
	<li>
		Afspraken:
		<ol>
			<?php
				foreach ($orders as $o) {
			?>
			<li><a href="<?=URL?>home/order/<?=$o['id']?>"><?=$o['day']?> <?=$o['clock']?></a></li>
			<?php
				}
			?>
		</ol>
	</li>
	<?php
		}
	?>
</ul>