<?php get_header(); ?>
    

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
              <h3>GREEN FORESssT</h3>
              <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
              
            </div>
            <p><a class="btn btn-large btn-primary">Sign Up</a></p>
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
<

    <!--End couresel -->




    <?php
        query_posts('posts_per_page=1');
            while(have_posts()) : the_post(); ?>
            <div class="jumbotron">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <p><?php the_content(); ?></p>
            </div>


    <?php endwhile; wp_reset_query(); ?>

    <div class="panel panel-default panel-body">
        <div class="row">
            <div class="col-md-2">
                <ul class="nav nav-pills nav-stacked">
                <!-- i love this -->
                    <?php wp_list_categories('orderby=name&title_li='); ?>
                </ul>
            </div>
            <div class="col-md-10">
                <?php 
                    query_posts('posts_per_page=6');
                    while(have_posts()) : the_post(); ?>
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <p><?php the_excerpt(); ?></p>
                    <h6><p class="text-muted">Posted on <?php the_time('F jS, Y'); ?>&nbsp;|&nbsp;<?php the_author(); ?></p></h6>
               <?php endwhile; wp_reset_query();?>  
            </div>
        </div>
    </div>

<?php get_footer() ?>