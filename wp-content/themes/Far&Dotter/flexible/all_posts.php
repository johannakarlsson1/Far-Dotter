<?php

$query = new WP_Query( array( 'category_name' => 'Dricka, Musik, Mat, Veckans' ) ); ?>

<div class="post-page container">
<div class="row">

  <div class="col-md-3 right-align">
    <div id="sidebar-right">
      <?php if ( function_exists('dynamic_sidebar') ) dynamic_sidebar('sidebar-left');?>
    </div>
  </div>
  <?php
// The Loop
if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post();?>

    <div class="col-md-9 left-align">
      <div class="single-post">
        <div class="post-content">
          <h1 class="post-title"><?php echo get_the_title(); ?></h1>
          <p class="post-author">Skrivet av: <?php echo get_the_author(); ?></p>
          <p class="post-author"><?php echo get_the_date(); ?></p>
          <p class="post-content"><?php echo get_the_content(); ?></p>
        </div>
      </div>
    </div>

    <?php
	}
	/* Restore original Post Data */
	wp_reset_postdata();
} else {
	// no posts found
} ?>

</div>

</div>
