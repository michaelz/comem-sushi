<?php $pageClass = 'carte'; ?>
<?php include 'php_includes/htmlbefore.php'; ?>
<?php include 'php_includes/header.php'; ?>
<div class="row">
	<h1>Carte des mets</h1>
</div>
<div id="carte-mobile" class="row show-for-small">
	<dl class="accordion" data-accordion>
	  <dd class="accordion-navigation">
	    <a href="#panel1b">Promotions</a>
	    <div id="panel1b" class="promotions content active">
	    	<p>Tous les jours à midi</p>
	    	<p><strong>4 menus à choix dès 18.--</strong></p>
	    	<p>Sushi + 1 salade à choix + 1 boisson à choix</p>
	    </div>
	  </dd>
	  <dd class="accordion-navigation">
	    <a href="#panel2b">Sushis à la pièce</a>
	    <div id="panel2b" class="sushis content">

		  	<div class="row">
		  		<div class="small-4 columns"> <a class="sashimi" href="produit.php"><span class="label">Sashimi</span></a></div>
		  		<div class="small-4 columns"> <a class="nigri" href="produit.php"><span class="label">Nigri</span></a></div>
		  		<div class="small-4 columns"> <a class="hosomaki" href="produit.php"><span class="label">Hosomaki</span></a></div>
		  	</div>
		  	<div class="row">
		  		<div class="small-4 columns"> <a class="california" href="produit.php"><span class="label">California</span></a></div>
		  		<div class="small-4 columns"> <a class="mixtes" href="produit.php"><span class="label">Mixtes</span></a></div>
		  		<div class="small-4 columns"> <a class="chirashi" href="produit.php"><span class="label">Chirashi</span></a></div>
		  	</div>
		  	<div class="row">
		  		<div class="small-4 columns"> <a class="pchauds" href="produit.php"><span class="label">Plats chauds</span></a></div>
		  		<div class="small-4 columns"> <a class="plateaux" href="produit.php"><span class="label">Grands plateaux</span></a></div>
		  		<div class="small-4 columns"> <a class="rouleaux" href="produit.php"><span class="label">Rouleaux d'été</span></a></div>
		  	</div>


	    </div>
	  </dd>
	  <dd class="accordion-navigation">
	    <a href="#panel3bd">Boissons et accompagnements</a>
	    <div id="panel3b" class="boissons content">
	      <div class="boissons small-4 columns"><a href="#">Boissons</a></div>
	      <div class="salades small-4 columns"><a href="#">Salades</a></div>
	      <div class="desserts small-4 columns"><a href="#">Desserts</a></div>
	    </div>
	  </dd>
	</dl>
</div>

<div id="carte-desktop" class="row hide-for-small">
	<div class="medium-4 columns"> <a href="produits.php"><h2>Sushis</h2></a></div>
  <div class="medium-4 columns"> <a href="produits.php"><h2>Boissons</h2></a></div>
  <div class="medium-4 columns"> <a href="produits.php"><h2>Accompagnements</small></h2></a></div>
</div>

<?php include 'php_includes/footer.php'; ?>
<?php include 'php_includes/htmlafter.php'; ?>