<?php 
get_header();?>


<div class='row'>
<div class='col-sm-8 blog-main'>
<?php 
if (have_posts()): while (have_posts()): the post();
get_template_part('content', get_post_format());
endwhile;?>



<?php  
endif; ?>


</div> <!-- /.col -->
</div> <!-- /.row -->




<?php 
get_footer();?>
