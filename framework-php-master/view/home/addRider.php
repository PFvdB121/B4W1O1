<h1>Registreren</h1>
<form action="<?=URL?>home/riderAdded" method="post">
	<div>
		<label for="name" class="col-3">Naam</label>
		<input type="text" name="name" id="name" placeholder="Naam" value="<?=$data[0]['name']?>">
		<span class="text-danger"><?=$data[1]['name'];?></span>
	</div>
	<div>
		<label for="age" class="col-3">Leeftijd</label>
		<input type="number" name="age" id="age" placeholder="Leeftijd" value="<?=$data[0]['age']?>">
		<span class="text-danger"><?=$data[1]['age'];?></span>
	</div>
	<div>
		<label for="gender" class="col-3">Geslacht</label>
		<select name="gender" id="gender">
			<option>--selecteer een optie hier--</option>
			<option value="Man"
			<?php
				if ($data[0]['gender'] == 'Man') {
			?>
			selected
			<?php
				}
			?>
			>Man</option>
			<option value="Vrouw"
			<?php
				if ($data[0]['gender'] == 'Vrouw') {
			?>
			selected
			<?php
				}
			?>
			>Vrouw</option>
			<option value="Non-binary"
			<?php
				if ($data[0]['gender'] == 'Non-binary') {
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
		<input type="text" name="city" id="city" placeholder="Stad" value="<?=$data[0]['city']?>">
		<span class="text-danger"><?=$data[1]['city'];?></span>
	</div>
	<div>
		<label for="street" class="col-3">Straat</label>
		<input type="text" name="street" id="street" placeholder="Straat" value="<?=$data[0]['street']?>">
		<span class="text-danger"><?=$data[1]['street'];?></span>
	</div>
	<div>
		<label for="housenumber" class="col-3">Huisnummer</label>
		<input type="text" name="housenumber" id="housenumber" placeholder="Huisnummer" value="<?=$data[0]['housenumber']?>">
		<span class="text-danger"><?=$data[1]['housenumber'];?></span>
	</div>
	<div>
		<label for="telephone" class="col-3">Telefoonnummer</label>
		<input type="text" name="telephone" id="telephone" placeholder="Telefoonnummer" value="<?=$data[0]['telephone']?>">
		<span class="text-danger"><?=$data[1]['telephone'];?></span>
	</div>
	<input type="submit" value="toevoegen">
</form>