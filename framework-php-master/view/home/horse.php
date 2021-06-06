<?php
	$orders = ordersHorse($id);
?>

<h1><?=$name?></h1>
<a href="<?=URL?>home/addOrder/<?=$id?>" class="fas fa-horse-head">Bestellen</a>
<a href="<?=URL?>home/editHorse/<?=$id?>" class="fas fa-pencil-alt">Aanpassen</a>
<a href="<?=URL?>home/destroyHorse/<?=$id?>" class="fas fa-ban">Verwijderen</a>
<ul>
	<li>Leeftijd: <?=$age?> jaar</li>
	<li>Ras: <?=$race?></li>
	<li>Hoogte: <?=$height?>cm</li>
	<li><?=$available?> beschikbaar voor springsport</li>
	<?php
		if (!empty($orders)) {
	?>
	<li>
		Besteld voor:
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