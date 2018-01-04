<?php get_header();?>

<div id="content">
  <div class="container" id="content-area">
     <div class="row">
    <div class="col-md-9" id="main">
    <?php while (have_posts()) : the_post();?>
      <div class="col-md-8">
    <?php the_post_thumbnail();?>
     <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>

     <div class="info"><?php the_time('D, j F, Y | H:i');?></div>
     <div class="content">
     <?php read_more(60);?>
     <a href="<?php the_permalink();?>">আরো পড়ুন</a>
     </div>
     </div>
     <?php endwhile;?>
     <h4 class="text-center"><?php previous_posts_link('আগের পাতা');?>
    <?php  echo paginate_links();?>
    <?php  next_posts_link('পরের পাতা'); ?></h4>
    </div>
  

    <?php get_sidebar();?>

    <?php get_footer();?>





