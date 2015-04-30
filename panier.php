<?php $pageClass = 'panier'; ?>
<?php include 'php_includes/htmlbefore.php'; ?>
<?php include 'php_includes/header.php'; ?>
<div class="row">
	<h1>Panier</h1>
	<p>Voici un aperçu de la commande en cours.</p>
</div>

<div class="row item">
	<div class="small-2 columns small-push-1 illustration">
		<img src="assets/images/petit_hosomaki_mixte.jpg"/>
	</div>
	<div class="small-9 columns">
		<div class="row">
			<h4 class="nom small-6 columns">Petit Hosomaki mixte</h4>
			<div class="qte small-6 columns">
				<span class="text">Quantité:</span> <input size="2" type="number" min="1" value="1"/><a class="enlever" href="#">Enlever</a>
			</div>
		</div>
	</div>
</div>
<div class="row item">
	<div class="small-2 columns small-push-1 illustration">
		<img src="assets/images/petit_hosomaki_mixte.jpg"/>
	</div>
	<div class="small-9 columns">
		<div class="row">
			<h4 class="nom small-6 columns">Rouleaux d'été aux crevettes</h4>
			<div class="qte small-6 columns">
				<span class="text">Quantité:</span> <input size="2" type="number" min="1" value="2"/><a class="enlever" href="#">Enlever</a>
			</div>
		</div>
	</div>
</div>

<div class="commande-fin row">
	<p class="total">Total: <strong>CHF 27.50</strong></p>
	<p class="paiement">
	<h3>Paiement</h3>
    <input id="radio1" type="radio"><label for="radio1">par carte</label><br>
    <input id="radio2" type="radio"><label for="radio2">à la livraison</label>
	</p>
	<p><a href="#" class="button">Passer commande</a> <a class="button success" href="carte.php">Retour à la carte</a></p>
</div>


<?php include 'php_includes/footer.php'; ?>
<?php include 'php_includes/htmlafter.php'; ?>