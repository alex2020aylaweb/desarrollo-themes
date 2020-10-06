<main>
<?php

if (have_posts()):   // si tenemos entradas...
    while(have_posts()): the_post();
        // aqui van las etiquetas de contenido del post que me encuentro
        get_template_part('templates/content', 'post'); // esto es lo mas aconsejable para tener aqui solo codigo php
      
    endwhile;

else: // en caso contrario si no hay entradas content-none.php tendrá la información de NO contenido.
    get_template_part('content','none'); ?>


    
    <?php  
    endif; ?>
    
    </div> <!-- /.blog-main --> 
    <?php get_sidebar(); ?>
    </div> <!-- /.row -->




</main>
