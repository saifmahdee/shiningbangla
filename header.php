<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<title>Shining Bangla</title>
<meta charset="<?php bloginfo('charset');?>"/>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<?php wp_head();?>

</head>
<body <?php body_class();?>>

<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-chevron-up" aria-hidden="true"></i></button>

<header>

<nav class="navbar navbar-default">
  <div class="nav-top">
      <div class="container">
        <div class="row">
          <div class="col-md-5"><p>ঢাকা| <?php include_once"bndate.php"; ?> | <?php
include('bnTime.php');
$time = time();
$Bdate = BDdate($time);
echo $Bdate;
?> | <?php
include('arTime.php');
$time = time();
$Bdate = ARdate($time);
echo $Bdate;
?> </p></div>
            <div class="col-md-7">
              <div class="col-md-9" id="search1">

               <?php get_search_form(); ?>

              </div>
              <div class="col-md-3 text-right">
                <button class="facebook"><a href="https://www.facebook.com/"></a><i class="fa fa-facebook" aria-hidden="true"></i></button>
                <button class="twitter"><a href="https://twitter.com/"><i class="fa fa-twitter" aria-hidden="true"></i></a></button>
                <button class="google-plus"><a href="https://plus.google.com/"><i class="fa fa-google-plus" aria-hidden="true"></i></a></button>
              </div>
            </div>
        </div>
    
      </div>
  </div>

  <div class="ticker">
    <div class="container">
    <div class="row">
    <div class="col-md-2" id="ticker-head">
    <p>এই মুহূর্তের সংবাদ</p>

    </div>
    
    <div class="col-md-10" id="ticker-content">

    

    <marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
      <ul>
        <?php
      global $post;
      $args = array( 'posts_per_page' => 3, 'orderby' => 'ASC' );
      $rand_posts = get_posts( $args );
      foreach ( $rand_posts as $post ) : 
        setup_postdata( $post ); ?>
        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
      <?php endforeach; 
      wp_reset_postdata(); ?>
      </ul>
    </marquee>

    </div>

      </div>
      </div>
    </div>


    <div class="container">
      <div class="row">
          <div class="col-md-3">
            <div class="brand-logo">
              <a href=""><img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height;?>" width="<?php echo get_custom_header()->width;?>" alt=""></a>     
            </div>
          </div>

          <div class="col-md-3"></div>

         
          <?php dynamic_sidebar('header_ad')?>
          
      </div>
    </div>
    <div class="br"></div>


          <div class="navbar-header">
            <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#photography" >
              <span class="sr-only">Toggle Navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
        
          <div class="container">
        <div class="collapse navbar-collapse" id="photography">
            <div class="uper-menu">
              <?php 
          if (function_exists('wp_nav_menu')) {
          wp_nav_menu( array(
                  'menu_class'=> "nav navbar-nav",
                  'theme_location'=> 'primary',

                ) );
                }
                ?>
            </div>
          </div>
        </div>
</nav>
</header>