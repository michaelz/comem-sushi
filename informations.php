<?php $pageClass = 'informations'; ?>
<?php include 'php_includes/htmlbefore.php'; ?>
<?php include 'php_includes/header.php'; ?>
<div id="page-informations">
<div class="row">
    <h5 class="telephone">021 312 44 00</h3>
    <h1>Informations</h1>
</div>
<div class="row">
  <div class="columns medium-6">
      <!-- a complétrer les classes ici, genre la largeur, etc.-->

      <!-- a complétrer les classes ici, genre la largeur, etc.-->
      <h3 class="horaires">Horaires</h2>
      <ul>
        <li>Du lundi au vendredi: de 10:00 à 22:00</li>
        <li>Samedis:  de 11:00 à 00:00</li>
        <li>Dimanches: de 11:00 à 21:00</li>
        <p>Nous sommes fermés durant les jours fériés.</p>
      </ul>

  </div>
  <div class="columns medium-6">

    <h3>Carte</h3>
    <div id="map-canvas">
     <i class="fa fa-map-marker fa-3x">Restaurant à Lausanne</i>
     <ul>
       <li>Rue du Grand-Pont 8</li>
       <li>1003 Lausanne</li>
     </ul>
    </div>

    <script>
      var myCenter=new google.maps.LatLng(46.521580, 6.630474);

      function initialize()
      {
      var mapProp = {
        center:myCenter,
        zoom:15,
        mapTypeId:google.maps.MapTypeId.ROADMAP,

        };

      var map=new google.maps.Map(document.getElementById("map-canvas"),mapProp);

      var marker=new google.maps.Marker({
        position:myCenter,
        });

      marker.setMap(map);
      }

      google.maps.event.addDomListener(window, 'load', initialize);
    </script>


  </div>
</div>
</div>

<?php include 'php_includes/footer.php'; ?>
<?php include 'php_includes/htmlafter.php'; ?>