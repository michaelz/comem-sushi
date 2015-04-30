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
	    		<div class="small-4 columns"> <a href="produit.php">Sashimi</a></div>
	    		<div class="small-4 columns"> <a href="produit.php">Nigri</a></div>
	    		<div class="small-4 columns"> <a href="produit.php">Hosomaki</a></div>
	    	</div>
	    	<div class="row">
	    		<div class="small-4 columns"> <a href="produit.php">California</a></div>
	    		<div class="small-4 columns"> <a href="produit.php">Mixtes</a></div>
	    		<div class="small-4 columns"> <a href="produit.php">Chirashi</a></div>
	    	</div>
	    	<div class="row">
	    		<div class="small-4 columns"> <a href="produit.php">Plats chauds</a></div>
	    		<div class="small-4 columns"> <a href="produit.php">Grands plateaux</a></div>
	    		<div class="small-4 columns"> <a href="produit.php">Rouleaux d'été</a></div>
	    	</div>

	    </div>
	  </dd>
	  <dd class="accordion-navigation">
	    <a href="#panel3b">Boissons et accompagnements</a>
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