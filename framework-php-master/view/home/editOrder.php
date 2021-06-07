<?php
	$riders = getAllRiders();
	$horses = getAllHorses();
?>
<h1>Bestelling aanpassen</h1>
<p>Prijs: €55 per uur</p>
<form action="<?=URL?>home/orderEdited" method="post">
	<input type="hidden" name="id" value="<?=$data[0]['id']?>">
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
		<input type="number" name="hours" id="hours" placeholder="uur" value="<?=$data[0]['hours']?>">
		<span class="text-danger"><?=$data[1]['hours'];?></span>
	</div>
	<div class="row">
		<label for="horse" class="col-3">Ruiter</label>
		<select name="horse" id="horse">
			<option value="">--Selecteer een optie hier--</option>
			<?php
				foreach ($horses as $h) {
			?>
			<option value="<?=$h['id']?>"
				<?php
					if ($data[0]['horse']==$h['id']) {
				?>
				selected
				<?php
					}
				?>
				><?=$h['name']?>
			</option>
			<?php
				}
			?>
		</select>
		<span class="text-danger"><?=$data[1]['horse'];?></span>
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
					if ($data[0]['rider']==$r['id']) {
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
	<input type="submit" value="aanpassen">
</form>