<h1>Informatie over <?=$name?></h1>
<form action="<?=URL?>home/riderEdited" method="post">
	<input type="hidden" value="<?=$data[0]['id']?>" name="id">
	<div>
		<label for="name" class="col-3">Naam</label>
		<input type="text" name="name" id="name" value="<?=$data[0]['name']?>" placeholder="Naam">
		<span class="text-danger"><?=$data[1]['name'];?></span>
	</div>
	<div>
		<label for="age" class="col-3">Leeftijd</label>
		<input type="number" name="age" id="age" min="0" value="<?=$data[0]['age']?>" placeholder="Leeftijd">
		<span class="text-danger"><?=$data[1]['age'];?></span>
	</div>
	<div>
		<label for="gender" class="col-3">Geslacht</label>
		<select name="gender" id="gender">
			<option>--selecteer een optie hier--</option>
			<option value="Man"
			<?php
				if ($data[0]['gender']=='Man') {
			?>
			selected
			<?php
				}
			?>
			>Man
			</option>
			<option value="Vrouw"
			<?php
				if ($data[0]['gender']=='Vrouw') {
			?>
			selected
			<?php
				}
			?>
			>Vrouw</option>
			<option value="Non-binary"
			<?php
				if ($data[0]['gender']=='Non-binary') {
			?>
			selected
			<?php
				}
			?>
			>Non-binary</option>
		</select>
		<span class="text-danger"><?=$data[1]['gender'];?></span>
	</div>
	<div>
		<label for="city" class="col-3">Stad</label>
		<input type="text" name="city" id="city" value="<?=$data[0]['city']?>" placeholder="Stad">
		<span class="text-danger"><?=$data[1]['city'];?></span>
	</div>
	<div>
		<label for="street" class="col-3">Straat</label>
		<input type="text" name="street" id="street" value="<?=$data[0]['street']?>" placeholder="Straat">
		<span class="text-danger"><?=$data[1]['street'];?></span>
	</div>
	<div>
		<label for="housenumber" class="col-3">Huisnummer</label>
		<input type="text" name="housenumber" id="housenumber" value="<?=$data[0]['housenumber']?>" placeholder="Huisnummer">
		<span class="text-danger"><?=$data[1]['housenumber'];?></span>
	</div>
	<div>
		<label for="telephone" class="col-3">Telefoonnummer</label>
		<input type="text" name="telephone" id="telephone" value="<?=$data[0]['telephone']?>" placeholder="Telefoonnummer">
		<span class="text-danger"><?=$data[1]['telephone'];?></span>
	</div>
	<input type="submit" value="toevoegen">
</form>