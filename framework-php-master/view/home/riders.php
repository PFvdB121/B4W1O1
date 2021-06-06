<?php
	$riders = getAllRiders();
?>
<h1>Ruiters</h1>
<a href="<?=URL?>home/addRider" class="fas fa-plus">Ruiter toevoegen</a>
<ul class="list-group">
	<?php
		foreach ($riders as $r) {
	?>
	<li class="list-group-item"><a href="<?=URL?>home/rider/<?=$r['id']?>"><?=$r['name']?></a></li>
	<?php
		}
	?>
</ul>