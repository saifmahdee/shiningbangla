<?php get_header();?>

<div id="content">

  <div class="container" id="content-area">
     <div class="row">
    <div class="col-md-9" id="main">

    <h4 style="color: red; background: #ddd; margin-top: 0; padding: 5px 0 5px 10px;"><?php 

    if (is_category()) {
      single_cat_title();
    } elseif(is_tag()) {
      single_tag_title();
    } elseif (is_author()) {
      the_post();
      echo get_the_author() . '-এর পোস্ট করা খবর'  ;
      rewind_posts();
    } elseif (is_day()) {
      echo get_the_date() . '---- তারিখের সকল খবর' ;
    } elseif (is_month()) {
      echo get_the_date('F,Y') . '---- মাসের সকল খবর' ;
    } elseif (is_year()) {
      echo get_the_date('Y') . '---- বছরের সকল খবর' ;
    } else {
      echo 'Archives:';
    } 
    ?></h4>



    

    <?php while (have_posts()) : the_post();?>
    <div class="row">
    <div class="col-md-12" id="post_dash">
      <div class="col-md-6">
    <?php the_post_thumbnail(array(300,200));?>
    </div>

    <div class="col-md-6">
     <p><a style="font-size: 25px;" href="<?php the_permalink();?>"><?php the_title();?></a></p>
     <h4><b><a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>"><?php the_author();?></a></b> | <?php the_time('j F, Y | H:i');?></h4>
     <p style="font-size: 20px; text-align: justify"><?php read_more(30);?><a style="padding-left: 5px;" href="<?php the_permalink();?>">আরো পড়ুন</a></p>
     </div>
      </div>
      </div>      

      <div class="col-md-12">
      <div id="post_break"></div>
      </div>

     <?php endwhile; ?>

    <h4 class="text-center"><?php previous_posts_link('আগের পাতা');?>
    <?php  echo paginate_links();?>
    <?php  next_posts_link('পরের পাতা'); ?></h4>
    </div>


  

    <?php get_sidebar();?>

    <?php get_footer();?>