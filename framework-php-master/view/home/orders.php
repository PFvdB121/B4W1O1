<?php
	$orders = getAllOrders();
?>
<h1>Afspraken</h1>
 <ul class="list-group">
 <?php
    foreach ($orders as $o) {
 ?>
    <li class="list-group-item"><a href="<?=URL?>/home/order/<?=$o['id']?>"><?=$o['day']?> <?=$o['clock']?></a></li>
 <?php
    }
 ?>
</ul>