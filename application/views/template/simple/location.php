<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyA2c52kvamllXmXcF-TR3XOIaPL5EwvAdQ"></script>
<?php
  $point = array(
    array(
      'latlng' => '-6.730028,110.831611',
      'name'   => 'fendi',
      'image'  => '/templates/simple/images/3.jpg'
    ),
    array(
      'latlng' => '-6.817418,110.865584',
      'name'   => 'yuli',
      'image'  => '/templates/simple/images/2.jpg'
    )
  )

?>

<div class="row" style="margin: 15px; background-color: rgba(255, 255, 255, 0.7);">
  <div style="padding: 0 15px"><h4>Denah Lokasi Mempelai Pria</h4></div>
  <div class="col-md-6">
    <img src="/templates/simple/images/Denah_Fendy.jpg" class="img-responsive" alt="Denah Lokasi Fendi">
  </div>

  <div class="col-md-6">
    <div id="map" style="width: auto; height: 390px;"></div>
    <a class="btn btn-default btn-block" style="margin: 0 0 20px 0" href="http://maps.google.com/maps?q=<?php echo $point[0]['latlng']?>&hl=es;z=17" target="_blank">Click here for map</a>
  </div>
</div>


<div class="row" style="margin: 15px; background-color: rgba(255, 255, 255, 0.7);">
  <div style="padding: 0 15px"><h4>Denah Lokasi Mempelai Wanita</h4></div>
  <div class="col-md-6">
    <img src="/templates/simple/images/Denah_Yuli.jpg" class="img-responsive" alt="Denah Lokasi Yuli">
  </div>

  <div class="col-md-6">
    <div id="map2" style="width: auto; height: 390px;"></div>
    <a class="btn btn-default btn-block" style="margin: 0 0 20px 0" href="http://maps.google.com/maps?q=<?php echo $point[1]['latlng']?>&hl=es;z=17" target="_blank">Click here for map</a>    
  </div>
</div>




<script type="text/javascript">
  function CustomMarker(latlng, map, imageSrc) {
    this.latlng_ = latlng;
    this.imageSrc = imageSrc;
    this.setMap(map);
  }
  CustomMarker.prototype = new google.maps.OverlayView();

  CustomMarker.prototype.draw = function () {
    // Check if the div has been created.
    var div = this.div_;
    if (!div) {
      // Create a overlay text DIV
      div = this.div_ = document.createElement('div');
      // Create the DIV representing our CustomMarker
      div.className = "customMarker"
      var img = document.createElement("img");
      img.src = this.imageSrc;
      div.appendChild(img);
      google.maps.event.addDomListener(div, "click", function (event) {
          google.maps.event.trigger(me, "click");
      });
      // Then add the overlay to the DOM
      var panes = this.getPanes();
      panes.overlayImage.appendChild(div);
    }
    // Position the overlay 
    var point = this.getProjection().fromLatLngToDivPixel(this.latlng_);
    if (point) {
      div.style.left = point.x + 'px';
      div.style.top = point.y + 'px';
    }
  };

  CustomMarker.prototype.remove = function () {
    // Check if the overlay was on the map and needs to be removed.
    if (this.div_) {
      this.div_.parentNode.removeChild(this.div_);
      this.div_ = null;
    }
  };

  CustomMarker.prototype.getPosition = function () {
    return this.latlng_;
  };


  /*Print MAPS*/
  var map = new google.maps.Map(document.getElementById("map"), {
    zoom: 15,
    center: new google.maps.LatLng(<?php echo $point[0]['latlng']?>),
    mapTypeId: google.maps.MapTypeId.ROADMAP
  });

  var data = [{
    profileImage: "<?php echo $point[0]['image']?>",
    pos: [<?php echo $point[0]['latlng']?>],
  }]

  for(var i=0;i<data.length;i++){
    new CustomMarker(new google.maps.LatLng(data[i].pos[0],data[i].pos[1]), map,  data[i].profileImage)
  }

  var map2 = new google.maps.Map(document.getElementById("map2"), {
    zoom: 15,
    center: new google.maps.LatLng(<?php echo $point[1]['latlng']?>),
    mapTypeId: google.maps.MapTypeId.ROADMAP
  });

  var data2 = [{
    profileImage: "<?php echo $point[1]['image']?>",
    pos: [<?php echo $point[1]['latlng']?>],
  }]

  for(var i=0;i<data2.length;i++){
    new CustomMarker(new google.maps.LatLng(data2[i].pos[0],data2[i].pos[1]), map2, data2[i].profileImage)
  }
</script>

<style type="text/css">
.customMarker {
  position:absolute;
  cursor:pointer;
  background:#424242;
  width:100px;
  height:100px;
  margin-left:-50px;
  margin-top:-110px;
  border-radius:50px;
  padding:0px;
}
.customMarker:after {
  content:"";
  position: absolute;
  bottom: -10px;
  left: 40px;
  border-width: 10px 10px 0;
  border-style: solid;
  border-color: #424242 transparent;
  display: block;
  width: 0;
}
.customMarker img {
  width:90px;
  height:90px;
  margin:5px;
  border-radius:50px;
}
</style>
