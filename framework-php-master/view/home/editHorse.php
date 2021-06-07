<h1><?=$name?> aanpassen</h1>
<form action="<?=URL?>home/horseEdited" method="post">
	<input type="hidden" name="id" value="<?=$data[0]['id']?>">
	<div class="row">
		<label for="name" class="col-3">Naam</label>
		<input type="text" name="name" id="name" value="<?=$data[0]['name']?>">
		<span class="text-danger"><?=$data[1]['name'];?></span>
	</div>
	<div class="row">
		<label for="age" class="col-3">Leeftijd</label>
		<input type="number" name="age" id="age" min="0" value="<?=$data[0]['age']?>">
		<span class="text-danger"><?=$data[1]['age'];?></span>
	</div>
	<div class="row">
		<label for="race" class="col-3">Ras</label>
		<input type="text" name="race" id="race" value="<?=$data[0]['race']?>">
		<span class="text-danger"><?=$data[1]['race'];?></span>
	</div>
	<div class="row">
		<label for="height" class="col-3">Hoogte in centimeter</label>
		<input type="number" name="height" id="height" min="100" value="<?=$data[0]['height']?>">
		<span class="text-danger"><?=$data[1]['height'];?></span>
	</div>
	<div class="row">
		<label for="available" class="col-3">Bruikbaar voor springsport?</label>
		<select name="available" id="available">
			<option value="">--Selecteer een optie--</option>
			<option value="Wel"
			<?php
			if ($data[0]['available']=='Wel') {
			?>
			selected
			<?php
			}
			?>
			>Ja</option>

			<option value="Niet"
			<?php
			if ($data[0]['available']=='Niet') {
			?>
			selected
			<?php
			}
			?>
			>Nee</option>
		</select>
		<span class="text-danger"><?=$data[1]['available'];?></span>
	</div>
	<input type="submit">
</form>