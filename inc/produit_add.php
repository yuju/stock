<div >
	<h1 class="page-header">Ajouter un produit</h1>
	<div>
		<form method="POST" action="inc/produit_add_handle.php">
			<div class="col-md-6">
				<div class="form-group">
					<label for="nom">Nom du produit</label>
					<input type="input" class="form-control" id="nom" name ="nom">
				</div>

				<div class="form-group">
					<label for="type">Type</label>
					<input type="input" class="form-control" id="type" name="type">
				</div>
			</div>
			<div class="col-md-6">

				<div class="form-group">
					<label for="type">Description</label>
					<textarea class="form-control" id="description" name="description" rows="4"></textarea>
				</div>
			</div>
			<div class="col-md-12">
			<button type="submit" class="btn btn-primary">Enregistrer</button>
			</div>
		</form>
	</div>
</div>