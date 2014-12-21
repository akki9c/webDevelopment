<?php get_header(); ?>

    <div class="row">
        <div class="col-md-9">
            <div class="panel panel-default panel-body">
            <?php 
                    
                    while(have_posts()) : the_post(); ?>
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <h6><p class="text-muted">Posted on <?php the_time('F jS, Y'); ?>&nbsp;|&nbsp;<?php the_author(); ?></p></h6>
                    <p><?php the_content(''); ?></p>

               <?php endwhile; wp_reset_query();?>  
            </div>
        </div>
        <div class="col-md-3">
            <div class="list-group">
                <?php query_posts('posts_per_page=8'); while(have_posts()) : the_post(); ?>
                <a href="<?php the_permalink(); ?>" class="list-group-item">
                    <h4 class="list-group-item-heading"><?php the_title(); ?></h4>
                    <p class="list-group-item-text">Posted on <?php the_time('F jS, Y'); ?>&nbsp;|&nbsp;<?php the_author(); ?></p>
                </a>
                <?php endwhile; wp_reset_query(); ?>           
            </div>
        </div>
    </div>

<?php get_footer(); ?>