<?php
/*
Template Name: Slider Layout
*/

get_header();?>
</div>



    
    <!--couresel -->
    <div id="myCarousel" class="carousel slide jumbotron" data-ride="carousel">
    
    <!-- container -->
    
    
    <!-- indicator -->
      <ol class="carousel-indicators">
        <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
        <li  data-target="#myCarousel" data-slide-to="1"></li>
        <li  data-target="#myCarousel" data-slide-to="2"></li>
        <li  data-target="#myCarousel" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="wp-content/themes/bootstrap/img/slide1.jpg" class="img-responsive">
          <div class="container">
            <div class="carousel-caption">
              <h3>GREEN FOREST</h3>
              <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
              <p><a class="btn btn-large btn-primary">Sign Up</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="wp-content/themes/bootstrap/img/slide2.jpg" class="img-responsive">
          <div class="carousel-caption">
          <h3>ONION</h3>
              <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
          </div>
        </div>
        <div class="item">
          <img src="wp-content/themes/bootstrap/img/slide3.jpg" class="img-responsive">
          <div class="carousel-caption">
          <h3>RAILWAY LINE</h3>
              <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
          </div>
        </div>
        <div class="item">
          <img src="wp-content/themes/bootstrap/img/slide4.jpg" class="img-responsive">
          <div class="carousel-caption">
          <h3>WEB FARM</h3>
              <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
          </div>
        </div>
       
        </div>
      
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
    
    </div>
    </div>

    <!--End couresel -->







<?php
get_footer();

?>
