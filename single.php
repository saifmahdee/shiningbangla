<?php get_header();?>

<div id="content">
  <div class="container" id="content-area">
     <div class="row">
    <div class="col-md-9" id="main">
        <div class="row">
            <div class="col-md-12">
            <div class="page_header">
              <ul class="breadcrumbs">
                <li><a href="http://localhost/mahdee/">প্রচ্ছদ</a>/</li>
                <li><?php the_category();?></li>
                <li>/<?php the_title();?></li>
              </ul>
              </div>
            </div>
        </div>


      <div class="single-post">
      <div class="post">
     <?php while (have_posts()) : the_post();?>
     <h2><?php the_title();?></h2>
     <h4><b><a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>"><?php the_author();?></a></b> | <?php the_time('j F, Y | H:i');?></h4>
     <?php the_post_thumbnail(array(700,300));?>
     <p style="text-align:justify;"><?php the_content();?></p>



     </div>

<!-- Related Post -->
     <?php 
     $args = array (
        'category__in'=>wp_get_post_categories($post->ID),
        'numberpost'=>2,
     );

     $relatedpost= get_posts($args);

     if ($relatedpost){
        setup_postdata($post);
        echo '<div class="relatedposts"><h3>এরকম আরো সংবাদ</h3>';
        foreach ($relatedpost as $post){ ?>
            <div class="relatedthumb">
              <div class="postrelated">
              <div><?php the_post_thumbnail(array(200, 200));?></div>
              <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
            </div>
            </div>
            <?php }
        echo '</div>';
     }

     wp_reset_postdata(); ?>

<?php if(function_exists('pf_show_link')){echo pf_show_link();} ?>
     <?php endwhile;?>


     <div>




   <!--   Related Post -->




    </div>


    </div>

    </div>
  

    <?php get_sidebar();?>

    <?php get_footer();?>