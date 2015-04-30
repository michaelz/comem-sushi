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
      <div class="medium-2 small-4 columns illustration"><img src="assets/images/sashimi_saumon.gif"/></div>
      <div class="medium-10 small-8 columns">
        <h3>Sashimi Saumon</h3>
          <p class="desc"><span class="label">8 sashimi saumon</span></p>
           <div class="prix">11.00</div>
          <div class="ajout"><a href="panier.php">Ajouter au panier</a></div>
      </div>
    </div>
  </div>
  <div class="small-12 columns produit">
    <div class="row">
      <div class="medium-2 small-4 columns illustration"><img src="assets/images/sashimi_mixte.gif"/></div>
      <div class="medium-10 small-8 columns">
        <h3>Sashimi Mixte</h3>
          <p class="desc"><span class="label">4 sashimi saumon</span><br/><span class="label">4 sashimi loup de mer</span><br /><span class="label">3 sashimi thon</span></p>
          <div class="prix">16.00</div>
          <div class="ajout"><a href="panier.php">Ajouter au panier</a></div>
      </div>
    </div>
  </div>
</div>

<?php include 'php_includes/footer.php'; ?>
<?php include 'php_includes/htmlafter.php'; ?>