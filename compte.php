<?php $pageClass = 'compte'; ?>
<?php include 'php_includes/htmlbefore.php'; ?>
<?php include 'php_includes/header.php'; ?>
<div class="row">
	<h1>Compte</h1>
</div>
<div class="row">
<h3>Mes informations</h3>
	<form>
		<div class="medium-6 columns">

		      <div class="row">
		        <div class="medium-5 columns">
		          <label for="right-label" class="left inline">Nom</label>
		        </div>
		        <div class="medium-7 columns">
		          <input type="text" id="left-label" placeholder="Joe">
		        </div>
		      </div>
		        <div class="row">
		        <div class="medium-5 columns">
		          <label for="right-label" class="left inline">Prenom</label>
		        </div>
		        <div class="medium-7 columns">
		          <input type="text" id="left-label" placeholder="Bar">
		        </div>
		      </div>

		      <div class="row">
		        <div class="medium-5 columns">
		          <label for="right-label" class="left inline">Numero de téléphone</label>
		        </div>
		        <div class="medium-7 columns">
		          <input type="text" id="left-label" placeholder="079 286 81 43">
		        </div>
		      </div>
		 </div>
		 <div class="medium-6 columns">
		 	 <div class="row">
		        <div class="medium-3 columns">
		          <label for="left-label" class="left inline">Adresse</label>
		        </div>
		        <div class="medium-9 columns">
		          <input type="text" id="left-label" placeholder="chemin de la soif 9">
		        </div>
		      </div>
		      <div class="row">
		        <div class="medium-3 columns">
		          <label for="left-label" class="left inline">Code postal</label>
		        </div>
		        <div class="medium-9 columns">
		          <input type="text" id="left-label" placeholder="1004">
		        </div>
		      </div>
		       <div class="row">
		        <div class="medium-3 columns">
		          <label for="left-label" class="left inline">Adresse mail</label>
		        </div>
		        <div class="medium-9 columns">
		          <input type="text" id="left-label" placeholder="joe.bar@gmail.com">
		        </div>
		      </div>
		 </div>

	</form>
</div>
<div class="row">
	<h3>Mes anciennes commandes</h3>
	<table style="width:100%">
	  <tr>
	    <th>Date</th>
	    <th>Contenu</th>
	    <th>Commander</th>
	  </tr>
	  <tr>
	    <td>30/05/2015</td>
	    <td>4x sushimis saumon</td>
	    <td><a href="#" class="button tiny success">Commander</a></td>
	  </tr>
	   <tr>
	    <td>24/04/2015</td>
	    <td>
	    	<br>2x sushimis saumon</br>
	    	<br>2x sushimis crabe</br>
	    </td>
	    <td><a href="#" class="button tiny success">Commander</a></td>
	  </tr>
	</table>

</div>

<?php include 'php_includes/footer.php'; ?>
<?php include 'php_includes/htmlafter.php'; ?>