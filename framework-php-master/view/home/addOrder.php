<?php
	$riders = getAllRiders();
?>
<h1>Paard bestellen</h1>
<p>Prijs: €55 per uur</p>
<form action="<?=URL?>home/orderAdded" method="post">
	<input type="hidden" name="horse" value="<?=$data[0]['horse']?>">
	<div class="row">
		<label for="day" class="col-3">Welke dag?</label>
		<input type="date" name="day" id="day" value="<?=$data[0]['day']?>">
		<span class="text-danger"><?=$data[1]['day'];?></span>
	</div>
	<div class="row">
		<label for="clock" class="col-3">Wanneer?</label>
		<input type="time" name="clock" id="clock" value="<?=$data[0]['clock']?>">
		<span class="text-danger"><?=$data[1]['clock'];?></span>
	</div>
	<div class="row">
		<label for="hours" class="col-3">Hoeveel uur?</label>
		<input type="number" name="hours" id="hours" placeholder="Uur" value="<?=$data[0]['hours']?>">
		<span class="text-danger"><?=$data[1]['hours'];?></span>
	</div>
	<div class="row">
		<label for="rider" class="col-3">Ruiter</label>
		<select name="rider" id="rider">
			<option value="">--Selecteer een optie hier--</option>
			<?php
				foreach ($riders as $r) {
			?>
			<option value="<?=$r['id']?>"
			<?php
				if ($data[0]['rider'] == $r['id']) {
			?>
			selected
			<?php
				}
			?>
			><?=$r['name']?></option>
			<?php
				}
			?>
		</select>
		<span class="text-danger"><?=$data[1]['rider'];?></span>
	</div>
	<input type="submit" value="Bestellen">
</form>