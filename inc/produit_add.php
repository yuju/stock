<form method="POST" action="inc/produit_add_handle.php">
	<div class="form-group">
		<label for="nom">Nom du produit</label>
		<input type="input" class="form-control" id="nom" name ="nom">
	</div>
	
	<div class="form-group">
		<label for="type">Type</label>
		<input type="input" class="form-control" id="type" name="type">
	</div>

	<div class="form-group">
		<label for="type">Description</label>
		<textarea class="form-control" id="description" name="description"></textarea>
	</div>
	
	<button type="submit" class="btn btn-default">Submit</button>
</form>
