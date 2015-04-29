<?php include 'php_includes/htmlbefore.php'; ?>
<?php include 'php_includes/header.php'; ?>


<div class="row">
  <h1>Informations</h1>
  <div class="columns">
    <!-- a complétrer les classes ici, genre la largeur, etc.-->
    <i class="fa fa-phone fa-2x">022 345 67 89</i>
  </div>

  <div class="columns">
    <!-- a complétrer les classes ici, genre la largeur, etc.-->
    <i class="fa fa-calendar fa-2x">Horaires</i>
    <ul>
      <li>Du lundi au vendredi: de 10:00 à 22:00</li>
      <li>Samedis:  de 11:00 à 00:00</li>
      <li>Dimanches: de 11:00 à 21:00</li>
      <p>Nous sommes fermés durant les jours fériés.</p>
    </ul>

  </div>

</div>
<div class="row">

<h3>Carte</h3>
<div id="map-canvas">
 <i class="fa fa-map-marker fa-3x">Restaurant à Lausanne</i>
 <ul>
   <li>Rue du Grand-Pont 8</li>
   <li>1003 Lausanne</li>
 </ul>
</div>

  <script>
  function initialize() {
    var mapCanvas = document.getElementById('map-canvas');
    var mapOptions = {
      center: new google.maps.LatLng(46.521580, 6.630474),
      zoom: 8,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    var map = new google.maps.Map(mapCanvas, mapOptions);
  }
  google.maps.event.addDomListener(window, 'load', initialize);
</script>
</div>

<?php include 'php_includes/footer.php'; ?>
<?php include 'php_includes/htmlafter.php'; ?>