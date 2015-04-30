<?php $pageClass = 'compte'; ?>
<?php include 'php_includes/htmlbefore.php'; ?>
<?php include 'php_includes/header.php'; ?>
<div class="row">
	<h1>Compte</h1>
</div>
<div class="row">
<h3>Mes informations</h3>
	<form>
		<!--Nom:<br>
		<input class="small-4 columns" type="text" name="firstname" value="Bar"/>
		<br>
		Prénom:<br>
		<input class="small-4 columns" type="text" name="lastname" value="Joe"/>
		Adresse Mail:<br>
		<input class="small-4 columns" type="text" name="mail" value="joe.bar@gmail.com"/>
		Adresse: <br>
		<input class="small-4 columns" type="text" name="address" value="chemin de la soif 9"/>
		Ville<br>
		<input class="small-4 columns" type="text" name="ville" value="Lausanne"/>
		Code postal: <br>
		<input class="small-4 columns" type="text" name="npa" value="1004"/>
		Numéro de téléphone: <br>
		<input class="small-4 columns" type="text" name="tel" value="0792968742"/>
		<input type="submit" value="Sauvegarder">
-->
		<div class="small-6 columns">

		      <div class="row">
		        <div class="small-5 columns">
		          <label for="right-label" class="left inline">Nom</label>
		        </div>
		        <div class="small-7 columns">
		          <input type="text" id="left-label" placeholder="Joe">
		        </div>
		      </div>
		        <div class="row">
		        <div class="small-5 columns">
		          <label for="right-label" class="left inline">Prenom</label>
		        </div>
		        <div class="small-7 columns">
		          <input type="text" id="left-label" placeholder="Bar">
		        </div>
		      </div>

		      <div class="row">
		        <div class="small-5 columns">
		          <label for="right-label" class="left inline">Numero de téléphone</label>
		        </div>
		        <div class="small-7 columns">
		          <input type="text" id="left-label" placeholder="079 286 81 43">
		        </div>
		      </div>
		 </div>
		 <div class="small-6 columns">
		 	 <div class="row">
		        <div class="small-3 columns">
		          <label for="left-label" class="left inline">Adresse</label>
		        </div>
		        <div class="small-9 columns">
		          <input type="text" id="left-label" placeholder="chemin de la soif 9">
		        </div>
		      </div>
		      <div class="row">
		        <div class="small-3 columns">
		          <label for="left-label" class="left inline">Code postal</label>
		        </div>
		        <div class="small-9 columns">
		          <input type="text" id="left-label" placeholder="1004">
		        </div>
		      </div>
		       <div class="row">
		        <div class="small-3 columns">
		          <label for="left-label" class="left inline">Adresse mail</label>
		        </div>
		        <div class="small-9 columns">
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
	    <td><input type="submit" value="commander" /></td>
	  </tr>
	   <tr>
	    <td>24/04/2015</td>
	    <td>
	    	<br>2x sushimis saumon</br>
	    	<br>2x sushimis crabe</br>
	    </td>
	    <td><input type="submit" value="commander" /></td>
	  </tr>
	</table>

</div>

<?php include 'php_includes/footer.php'; ?>
<?php include 'php_includes/htmlafter.php'; ?>