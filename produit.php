<?php $pageClass = 'produit'; ?>
<?php include 'php_includes/htmlbefore.php'; ?>
<?php include 'php_includes/header.php'; ?>
<div class="row">
	<h5><a href="produits.php">Retour à Sushis à la pièce</a></h5>
  <h1>Les Sashimis</h1>
</div>
<div class="row liste">
  <div class="small-12 columns produit">
    <div class="row">
      <div class="medium-2 small-4 columns illustration"><img src="assets/images/produit1.jpg"/></div>
      <div class="medium-10 small-8 columns">
        <h2>Sashimi Saumon</h2>
          <p class="desc">8 sashimi saumon <span class="prix">11.00</span></p>
          <div class="ajout"><a href="panier.php">+</a></div>
      </div>
    </div>
  </div>
  <div class="small-12 columns produit">
    <div class="row">
      <div class="medium-2 small-4 columns illustration"><img src="assets/images/produit2.jpg"/></div>
      <div class="medium-10 small-8 columns">
        <h2>Sashimi Mixte</h2>
          <p class="desc">4 sashimi saumon<br/>4 sashimi loup de mer<br />3 sashimi thon <span class="prix">11.00</span></p>
          <div class="ajout"><a href="panier.php">+</a></div>
      </div>
    </div>
  </div>
</div>

<?php include 'php_includes/footer.php'; ?>
<?php include 'php_includes/htmlafter.php'; ?>