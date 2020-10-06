
<div class="card" style="width: 18rem;">
  <img src="<?php echo the_post_thumbnail_url() ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php the_title() ?></h5>
    <p class="card-text"></p>
    <a href="<?php the_permalink() ?>" class="btn btn-primary">Ver detalles</a>
  </div>
</div>
