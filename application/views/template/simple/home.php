<div class="row" style="margin: 10px 0">
	<div class="col-md-6">
		<img src="/templates/simple/images/thumb/IMG_3226 sr.jpg" class="img-responsive">
	</div>	
	<div class="col-md-6 home_right">
		<div style="background-color: rgba(255, 255, 255, 0.7); padding: 45px 20px;">
			<img src="/templates/simple/images/thumb/Yuli_Fendy.png" class="img-responsive">
		</div>
	</div>	
</div>

<div class="row text-center home_bottom">
	<div class="home_bottom_text">
		<img src="/templates/simple/images/thumb/Yuli_Fendy2.png" class="img-responsive home_bottom_img">
	</div>
</div>

<div class="row text-center home_footer">
	<div class="home_footer_text">
		<img src="/templates/simple/images/thumb/Yuli_Fendy3.png" class="img-responsive home_footer_img">
	   
    <?php
      $r_data = array(
        array(
          'email'   => 'syafiq@fisip.net',
          'name'    => 'Ahmad Syafiq',
          'image'   => 'https://lh6.googleusercontent.com/-7WTTUk5lnXE/AAAAAAAAAAI/AAAAAAAAAF0/6rSDB_qFCHo/photo.jpg',
          'content' => 'Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test '
        )/*, array(
          'email'   => '4.syafiq@gmail.com',
          'name'    => 'Ahmad Syafiq 2',
          'image'   => 'https://lh3.googleusercontent.com/-xWqEGOIB6Jo/AAAAAAAAAAI/AAAAAAAAAKY/-rSLnk7XCMo/photo.jpg',
          'content' => 'Jajal Jajal Jajal Jajal Jajal Jajal Jajal Jajal Jajal Jajal Jajal Jajal Jajal Jajal Jajal Jajal '
        )*/
      );

      // $r_data = array();


      // pr($r_list, __FILE__.':'.__LINE__);

      $email = 'ahmad.syafiq.ti.umk@gmail.com';

    ?>
		<div class="row">
			<div class="col-xs-12">
        <?php
        if (!empty($r_list))
        {
          ?>
          <div class="carousel slide" data-ride="carousel" id="quote-carousel">
            <ol class="carousel-indicators">
              <?php
              reset($r_list);
              $first_key = key($r_list);
              foreach ($r_list as $key => $data)
              {
                $cls_active = $key == $first_key ? ' active' : '';
                ?>
                  <li data-target="#quote-carousel" data-slide-to="<?php $key ?>" class="<?php echo $cls_active ?>"></li>
                <?php
              }
              ?>
            </ol>
            
            <div class="carousel-inner"> 
              <?php
              foreach ($r_list as $key => $data)
              {
                $cls_active = $key == $first_key ? ' active' : '';
                $email = $data['data']['email'];
                $a = @file_get_contents('http://picasaweb.google.com/data/entry/api/user/'.$email.'?alt=json');
                if (!empty($a))
                {
                  $a   = json_decode($a,1);
                  $img = $a['entry']['gphoto$thumbnail']['$t'];
                }else{
                  $img = 'http://www.astr.ro/img/icon-user-default.jpg';
                }
                ?>
                <div class="item<?php echo $cls_active?>">
                  <blockquote>
                    <div class="row">
                      <div class="col-sm-3 text-center">
                        <img src="<?php echo $img ?>">
                      </div>
                      <div class="col-sm-9">
                        <p style="padding-right: 15px"><?php echo implode('. ', $data['congrats']) ?></p>
                        <small><?php echo $data['data']['name'] ?></small>
                      </div>
                    </div>
                  </blockquote>
                </div>
                <?php
              }
              ?>          
            </div>
            
            <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
            <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
          </div> 
          <?php
        }else{
          ?>
          <div style="margin: 20px 0;">
            <h4>Daftar Ucapan Selamat Masih Kosong.</h4>
            <a href="/congrats" class="btn btn-primary">Kirim Ucapan </a>
          </div>
          <?php
        }
        ?>
			</div>
		</div>
	</div>
</div>





<style type="text/css">
	/* carousel */
#quote-carousel 
{
  padding: 0 10px 30px 10px;
  margin-top: 30px;
}

/* Control buttons  */
#quote-carousel .carousel-control
{
  background: none;
  color: #222;
  font-size: 2.3em;
  text-shadow: none;
  margin-top: 30px;
}
/* Previous button  */
#quote-carousel .carousel-control.left 
{
  left: -12px;
}
/* Next button  */
#quote-carousel .carousel-control.right 
{
  right: -12px !important;
}
/* Changes the position of the indicators */
#quote-carousel .carousel-indicators 
{
  right: 50%;
  top: auto;
  bottom: 0px;
  margin-right: -19px;
}
/* Changes the color of the indicators */
#quote-carousel .carousel-indicators li 
{
  background: #c0c0c0;
}
#quote-carousel .carousel-indicators .active 
{
  background: #333333;
}
#quote-carousel img
{
  width: 100px;
  height: 100px;
  border-radius: 50%;
}
/* End carousel */

.item blockquote {
    border-left: none; 
    margin: 0;
}

.item blockquote img {
    margin-bottom: 10px;
}

.item blockquote p:before {
    content: "\f10d";
    font-family: 'Fontawesome';
    float: left;
    margin-right: 10px;
}



/**
  MEDIA QUERIES
*/

/* Small devices (tablets, 768px and up) */
@media (min-width: 768px) { 
    #quote-carousel 
    {
      margin-bottom: 0;
      padding: 0 40px 30px 40px;
    }
    
}

/* Small devices (tablets, up to 768px) */
@media (max-width: 768px) { 
    
    /* Make the indicators larger for easier clicking with fingers/thumb on mobile */
    
    #quote-carousel .carousel-indicators {
        bottom: -20px !important;  
    }
    #quote-carousel .carousel-indicators li {
        display: inline-block;
        margin: 0px 5px;
        width: 15px;
        height: 15px;
    }
    #quote-carousel .carousel-indicators li.active {
        margin: 0px 5px;
        width: 20px;
        height: 20px;
    }
}
</style>