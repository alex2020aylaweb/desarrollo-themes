<main>
<?php 

if (have_posts()):  

    while(have_posts()): the_post();
        get_template_part('templates/content','index'); 
    
    endwhile;
    ?>
    <div>
    <?php  
    the_posts_pagination([
    'screen_reader_text' => ' ',
    'mid_size'  => 2,
    'prev_text' => __( '<<', 'textdomain' ),
    'next_text' => __( '>>', 'textdomain' )
]);
    ?>
    </div>
    <?php

else:
    get_template_part('content','none');
    ?>



    
    
    <?php  
    endif; ?>
    
    </div> <!-- /.blog-main --> 
    <?php get_sidebar(); ?>
    </div> <!-- /.row -->



 <?php  
 

?>
</main>