<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyA2c52kvamllXmXcF-TR3XOIaPL5EwvAdQ"></script>
<div class="row" style="margin: 15px">
  <div class="col-md-6">
    <?php
    // $latlong = '-6.730028, 110.831611';
    // $latlong = explode(',', $latlong);
    ?>
   <!--  <div id="mapouter">
      <div id="gmap_canvas">
        <iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=<?php echo $latlong[0]?>,<?php echo $latlong[1]?>&hl=es;z=14&amp;output=embed"></iframe>
        <br />
        <small><a href="https://maps.google.com/maps?q=<?php //echo $latlong[0]?>,<?php //echo $latlong[1]?>&hl=es;z=14&amp;output=embed" style="color:#0000FF;text-align:left" target="_blank">See map bigger</a></small>
      </div>
    </div> -->
    <div id="map2" style="width: auto; height: 480px;"></div>
    <a class="btn btn-primary" style="margin: 20px 0" href="http://maps.google.com/?q=-6.730028,110.831611" target="_blank">Click here for map</a>
  </div>

  <div class="col-md-6">
    <div id="map" style="width: auto; height: 480px;"></div>
    <a class="btn btn-primary" style="margin: 20px 0" href="http://maps.google.com/?q=-6.8120277,110.8187709" target="_blank">Click here for map</a>

        <!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyA_uxPgDk8N5dqje-8fbml6VN3E-Kz7fe8"></script> -->
        <script type="text/javascript">
          //adapted from http://gmaps-samples-v3.googlecode.com/svn/trunk/overlayview/custommarker.html
                function CustomMarker(latlng, map, imageSrc) {
                    this.latlng_ = latlng;
                    this.imageSrc = imageSrc;
                    // Once the LatLng and text are set, add the overlay to the map.  This will
                    // trigger a call to panes_changed which should in turn call draw.
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

                var map = new google.maps.Map(document.getElementById("map"), {
                    zoom: 17,
                    center: new google.maps.LatLng(-6.8120277,110.8187709),
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                });

                var data = [{
                    profileImage: "http://placekitten.com/90/90",
                    pos: [-6.8120277,110.8187709],
                }]

                for(var i=0;i<data.length;i++){
                new CustomMarker(new google.maps.LatLng(data[i].pos[0],data[i].pos[1]), map,  data[i].profileImage)
                }
                    </script>

                    <style type="text/css">
                      .customMarker {
                    position:absolute;
                    cursor:pointer;
                    background:#424242;
                    width:100px;
                    height:100px;
                    /* -width/2 */
                    margin-left:-50px;
                    /* -height + arrow */
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
    var div = this.div_;
    if (!div) {
      div = this.div_ = document.createElement('div');
      div.className = "customMarker"

      var img = document.createElement("img");
      img.src = this.imageSrc;
      div.appendChild(img);
      google.maps.event.addDomListener(div, "click", function (event) {
          google.maps.event.trigger(me, "click");
      });

      var panes = this.getPanes();
      panes.overlayImage.appendChild(div);
    }

    var point = this.getProjection().fromLatLngToDivPixel(this.latlng_);
    if (point) {
      div.style.left = point.x + 'px';
      div.style.top = point.y + 'px';
    }
  };

  CustomMarker.prototype.remove = function () {
    if (this.div_) {
      this.div_.parentNode.removeChild(this.div_);
      this.div_ = null;
    }
  };

  CustomMarker.prototype.getPosition = function () {
    return this.latlng_;
  };

  var map = new google.maps.Map(document.getElementById("map2"), {
    zoom: 17,
    center: new google.maps.LatLng(-6.730028, 110.831611),
    mapTypeId: google.maps.MapTypeId.ROADMAP
  });

  var data = [{
      profileImage: "https://lh3.googleusercontent.com/-xWqEGOIB6Jo/AAAAAAAAAAI/AAAAAAAAAKY/-rSLnk7XCMo/photo.jpg",
      pos: [-6.730028, 110.831611],
  }/*, {
      profileImage: "http://placekitten.com/90/90",
      pos: [37.77220, -122.41555],
  }*/]

  for(var i=0;i<data.length;i++){
  new CustomMarker(new google.maps.LatLng(data[i].pos[0],data[i].pos[1]), map,  data[i].profileImage)
  }
</script>

