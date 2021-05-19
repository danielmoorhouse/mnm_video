<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Lodc
 */

get_header();

$args = array( 
    'post_type' => 'video',
    'post_status' => 'publish',
    'meta_key' => 'video_category',
    'orderby' => 'meta_value',
    'order' => 'ASC'

);

    $loop = new WP_Query( $args );  
?>

<div class="container">
<h1>Videos</h1><br />

<!-- Nav tabs -->
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#home">Fundamentals & warm ups</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#menu1">Cardio</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#menu2">Re-warm up</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#menu3">Floor</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#menu4">Dance Routines</a>
  </li>
</ul>
<!-- Tab panes -->
<div class="tab-content">
<?php
if( $loop->have_posts() ):   ?>
  <div class="tab-pane container active" id="home">
  <br>
  <div class="row">
<?php  while ( have_posts() ) : the_post(); ?>
<?php if(get_field('video_category') === "Fundamentals") : ?>

  <div class="col-md-4 text-center">
 
    <div style="width:95%;padding-top:0%!important;background-image: url('https://img.youtube.com/vi/<?php the_field('youtube_video_id') ?>/hqdefault.jpg');background-size:cover;min-height:280px;position:relative;">
    <p style="color:#fff;font-weight:700;">Fundamentals</p>
    <a style="display:block;" title="Watch <?php the_title() ?>"  itemprop="url" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">

<i class="fab fa-youtube" style="color:#c4302b;font-size:50px;margin-top:60px;"></i>
<!-- <p style="position:absolute;bottom:0;left:10%;color:#fff;"></p> -->
                <p><?php the_content(); ?></p>
                </a>
                </div>
                <div class="text-center" style="width:95%;">
                <p><strong>  <?php the_title(); ?></strong></p>
                </div>
                
  </div>
  <?php endif; ?>
  <?php endwhile; ?>

<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>
  </div>
  </div>

  <div class="tab-pane container fade" id="menu1">
  <br>
  <div class="row">
<?php  while ( have_posts() ) : the_post(); ?>
<?php if(get_field('video_category') === "Cardio") : ?>

  <div class="col-md-4 text-center">
p                                  




      
    <div style="width:95%;padding-top:0%!important;background-image: url('https://img.youtube.com/vi/<?php the_field('youtube_video_id') ?>/hqdefault.jpg');background-size:cover;min-height:280px;position:relative;">
    <p style="color:#fff;font-weight:700;">Cardio</p>
    <a style="display:block;" title="Watch <?php the_title() ?>"  itemprop="url" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">

<i class="fab fa-youtube" style="color:#c4302b;font-size:50px;margin-top:60px;"></i>
<!-- <p style="position:absolute;bottom:0;left:10%;color:#fff;"></p> -->
                <p><?php the_content(); ?></p>
                </a>
                </div>
                <div class="text-center" style="width:95%;">
                <p><strong>   <?php the_title(); ?></strong>
                </div>
            
  </div>
  <?php endif; ?>
  <?php endwhile; ?>

<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>
  </div>
  </div>
  <div class="tab-pane container fade" id="menu2">
  <br>
  <div class="row">
<?php  while ( have_posts() ) : the_post(); ?>
<?php if(get_field('video_category') === "Re-warm up") : ?>

  <div class="col-md-4 text-center">
 
    <div style="width:95%;padding-top:0%!important;background-image: url('https://img.youtube.com/vi/<?php the_field('youtube_video_id') ?>/hqdefault.jpg');background-size:cover;min-height:280px;position:relative;">
    <p style="color:#fff;font-weight:700;">Re-warm up</p>
    <a style="display:block;" title="Watch <?php the_title() ?>"  itemprop="url" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">

<i class="fab fa-youtube" style="color:#c4302b;font-size:50px;margin-top:60px;"></i>
<!-- <p style="position:absolute;bottom:0;left:10%;color:#fff;"></p> -->
                <p><?php the_content(); ?></p>
                </a>
                </div>
                <div class="text-center" style="width:95%;">
                <p><strong>  <?php the_title(); ?> </strong></p>
                </div>
             
  </div>
  <?php endif; ?>
  <?php endwhile; ?>

<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>
  </div>
  
  </div>
  <div class="tab-pane container fade" id="menu3">
  <br>
  <div class="row">
<?php  while ( have_posts() ) : the_post(); ?>
<?php if(get_field('video_category') === "Floor") : ?>

  <div class="col-md-4 text-center">
 
    <div style="width:95%;padding-top:0%!important;background-image: url('https://img.youtube.com/vi/<?php the_field('youtube_video_id') ?>/hqdefault.jpg');background-size:cover;min-height:280px;position:relative;">
    <p style="color:#fff;font-weight:700;">Floor Exercises</p>
    <a style="display:block;" title="Watch <?php the_title() ?>"  itemprop="url" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">

<i class="fab fa-youtube" style="color:#c4302b;font-size:50px;margin-top:60px;"></i>
<!-- <p style="position:absolute;bottom:0;left:10%;color:#fff;"></p> -->
                <p><?php the_content(); ?></p>
                </a>
                </div>
                <div class="text-center" style="width:95%;">
                <p><strong> <?php the_title(); ?></strong></p>
                </div>
                
  </div>
  <?php endif; ?>
  <?php endwhile; ?>

<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>
  </div>
  </div>
  <div class="tab-pane container fade" id="menu4">
  <br>
  <div class="row">
<?php  while ( have_posts() ) : the_post(); ?>
<?php if(get_field('video_category') === "Dance") : ?>

  <div class="col-md-4 text-center">
 
    <div style="width:95%;padding-top:0%!important;background-image: url('https://img.youtube.com/vi/<?php the_field('youtube_video_id') ?>/hqdefault.jpg');background-size:cover;min-height:280px;position:relative;">
    <p style="color:#fff;font-weight:700;">Dance Routines</p>
    <a style="display:block;" title="Watch <?php the_title() ?>"  itemprop="url" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">

<i class="fab fa-youtube" style="color:#c4302b;font-size:50px;margin-top:60px;"></i>
<!-- <p style="position:absolute;bottom:0;left:10%;color:#fff;"></p> -->
                <p><?php the_content(); ?></p>
                </a>
                </div>
                <div class="text-center" style="width:95%;">
              <p><strong>  <?php the_title(); ?> </strong></p>
                </div>
                
  </div>
  <?php endif; ?>
  <?php endwhile; ?>

<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>
  </div>
  </div>
</div>

<?php endif; ?>
<?php

get_footer();

