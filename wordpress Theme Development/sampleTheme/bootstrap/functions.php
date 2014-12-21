<?php
    

    // Register Custom Navigation Walker
    include_once('wp_bootstrap_navwalker.php');

    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'bootstrap' ),
    ) );


?>

