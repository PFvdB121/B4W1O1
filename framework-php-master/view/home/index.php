<?php
	$horses = getAllHorses();
?>
 <h1>Paarden</h1>
 <a href="<?=URL?>home/addHorse" class="fas fa-plus">Paard toevoegen</a>
 <ul class="list-group">
 <?php
    foreach ($horses as $h) {
 ?>
    <li class="list-group-item"><a href="<?=URL?>/home/horse/<?=$h['id']?>"><?=$h['name']?></a></li>
 <?php
    }
 ?>
</ul>
