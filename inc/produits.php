<?php 
	require '../config.php';
?>
<div >
	<h1 class="page-header">Produits</h1>

	<div class="row placeholders">
		<div class="col-xs-6 col-sm-3 placeholder">
			<h4>Label</h4>
			<span class="text-muted">Something else</span>
		</div>
		<div class="col-xs-6 col-sm-3 placeholder">
			<h4>Label</h4>
			<span class="text-muted">Something else</span>
		</div>
		<div class="col-xs-6 col-sm-3 placeholder">
			<h4>Label</h4>
			<span class="text-muted">Something else</span>
		</div>
		<div class="col-xs-6 col-sm-3 placeholder">
			<h4>Label</h4>
			<span class="text-muted">Something else</span>
		</div>
	</div>
	
	<div class="row placeholders">
		<button type="button" class="btn btn-primary pull-right" aria-label="Right Align">
			<span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Ajouter un produit
		</button>
	</div>

	<h2 class="sub-header">Liste des produits</h2>
	<div class="table-responsive">
		<table class="table table-striped">
			<thead>
				<tr>
					<th>#</th>
					<th>Nom</th>
					<th>Type</th>
					<th>Description</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				
				<tr>
					<?php 
						$query_cmd = "SELECT * FROM produit";
						$reponse = $bdd->query($query_cmd);
						while ($donnees = $reponse->fetch())
						{
							?>
							<tr>
							<td><?php echo $donnees["id"]; ?> </td>
							<td><?php echo $donnees["nom"]; ?> </td>
							<td><?php echo $donnees["type"]; ?> </td>
							<td><?php echo $donnees["description"]; ?> </td>
							<td></td>
							</tr>
					<?php
						}
					?>

				</tr>
			</tbody>
		</table>
	</div>
</div>