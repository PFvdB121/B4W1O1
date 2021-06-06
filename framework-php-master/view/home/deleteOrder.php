<h1>Weet u zeker dat u de afspraak op <?=$day?> om <?=$clock?> wilt verwijderen?</h1>
<form action="<?=URL?>home/orderDestroyed" method="post">
	<input type="hidden" name="id" value="<?=$id?>">
	<input type="submit" class="btn btn-success" value="Ja">
	<a href="<?=URL?>home/" class="btn btn-danger">Nee</a>
</form>