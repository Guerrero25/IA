<script>
// Google Map
function initMap() {

      var map = new google.maps.Map(document.getElementById('map'), {
        zoom:12,
        center: {lat: 10.400529, lng: -75.503036}
      });

      // Create an array of alphabetical characters used to label the markers.
      var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

      // Add some markers to the map.
      // Note: The code uses the JavaScript Array.prototype.map() method to
      // create an array of markers based on a given "locations" array.
      // The map() method here has nothing to do with the Google Maps API.
      var markers = locations.map(function(location, i) {
        return new google.maps.Marker({
          position: location,
          label: labels[i % labels.length]
        });
      });

      // Add a marker clusterer to manage the markers.
      var markerCluster = new MarkerClusterer(map, markers,
          {imagePath: 'http://localhost/IA/static/img/m'});
    }
    var locations = [
      {lat: 10.4064, lng: -75.520},
      {lat: 10.4054, lng: -75.540},
      {lat: 10.4040, lng: -75.538},
      {lat: 10.504, lng: -75.510},
      {lat: 10.506, lng: -75.510},
      {lat: 10.508, lng: -75.510},
      {lat: 10.510, lng: -75.510},
      {lat: 10.511, lng: -75.510},
      {lat: 10.4064, lng: -75.520},
      {lat: 10.4064, lng: -75.520},
      {lat: 10.4064, lng: -75.520},
      {lat: 10.4064, lng: -75.520},
      {lat: 10.4064, lng: -75.520},
      {lat: 10.4064, lng: -75.520},
      {lat: 10.4064, lng: -75.520},
      {lat: 10.4064, lng: -75.520},

    ]
</script>
<script src="<?=base_url()?>static/js/markerclusterer.js"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCeU9ZqJPtlAH7BuwThl6R6sPz7knI7CmE&callback=initMap"></script>
<div class="container">

  <section class="row">

    <div class="col-sm-3">

      <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">Estudiantes desertados</div>

        <table class=table>
          <thead>
            <tr><th>#</th> <th>Nombre</th> </tr>
          </thead>
          <tbody>
            <?php foreach ($desertores as $value) {?>
            <tr>
              <td><?=$value->id_estudiante?></td>
              <td><?=$value->name?></td>
            </tr>
            <?php }?>
          </tbody>
        </table>
      </div>

    </div>

    <div class="col-sm-6">
      <div class="mapc" style="height:60vh !important;">
        <div id="map" style="height:100% !important;"></div>
      </div>
    </div>
  </section>

</div>
<br><br>
