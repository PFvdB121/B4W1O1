<h1>Weet u zeker dat u <?=$name?> wilt verwijderen?</h1>
<form action="<?=URL?>home/riderDestroyed" method="post">
	<input type="hidden" name="id" value="<?=$id?>">
	<input type="submit" class="btn btn-success" value="Ja">
	<a href="<?=URL?>home/" class="btn btn-danger">Nee</a>
</form>