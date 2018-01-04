<?php /* Template Name: Home */ ?>

<?php get_header();?>

<div id="feature-up">
  <div class="container">
         <div class="col-md-12" id="feature-content">
                     
                     <div class="col-md-3">
                    <?php query_posts('showposts=1&cat=3'); ?>
                      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <div class="col-md-6">
                        <div><?php the_post_thumbnail(array(110,200)); ?></div>
                        </div>
                        <div class="col-md-6">
                      <p style=" font-size: 16px; line-height: 15px;"><a style="text-decoration: none;" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                      </div>
                      <?php endwhile; endif; ?>
                      <?php wp_reset_query(); ?>
                    </div>

                     <div class="col-md-3">
                    <?php query_posts('showposts=1&cat=54'); ?>
                      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <div class="col-md-6">
                        <div><?php the_post_thumbnail(array(110,200)); ?></div>
                        </div>
                        <div class="col-md-6">
                      <p style=" font-size: 16px; line-height: 15px;"><a style="text-decoration: none;" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                      </div>
                      <?php endwhile; endif; ?>
                      <?php wp_reset_query(); ?>
                    </div>


                     <div class="col-md-3">
                    <?php query_posts('showposts=1&cat=6'); ?>
                      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <div class="col-md-6">
                        <div><?php the_post_thumbnail(array(110,200)); ?></div>
                        </div>
                        <div class="col-md-6">
                      <p style=" font-size: 16px; line-height: 15px;"><a style="text-decoration: none;" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                      </div>
                      <?php endwhile; endif; ?>
                      <?php wp_reset_query(); ?>
                    </div>

                    <div class="col-md-3">
                    <?php query_posts('showposts=1&cat=4'); ?>
                      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <div class="col-md-6">
                        <div><?php the_post_thumbnail(array(110,200)); ?></div>
                        </div>
                        <div class="col-md-6">
                      <p style=" font-size: 16px; line-height: 15px;"><a style="text-decoration: none;" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                      </div>
                      <?php endwhile; endif; ?>
                      <?php wp_reset_query(); ?>
                    </div>

                    

                    
                  </div>
              </div>
            </div>

<div id="content">
  <div class="container" id="content-area">
      <div class="row">

    <div class="col-md-9" id="main">
      <div class="line"><p>শীর্ষ সংবাদ</p></div>
      <div class="row">
          <div class="col-md-6">
          <div class="shirsa">
            <?php query_posts('showposts=1&cat=54'); ?>
              <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <div class="shirsa1"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(400, 620));?></a></div>
              <?php endwhile; endif; ?>
              <?php wp_reset_query(); ?>
              </div>
          </div>

          <div class="col-md-6">
          <div class="shirsa_title">
            <?php query_posts('showposts=1&cat=54'); ?>
              <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <div><a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a></div>
              <div class="shirsa_content"><p><?php read_more(40);?><a href="<?php the_permalink();?>">আরো পড়ুন</a></p></div>
              <?php endwhile; endif; ?>
              <?php wp_reset_query(); ?>
              </div>
          </div>
          
<div class="br"></div>
          <div class="col-md-12">
          <div class="row">
            <div class="col-md-3">
                    <?php query_posts('showposts=1&cat=4'); ?>
                      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <div class="row">
                        <div class="col-md-5">
                        <div><?php the_post_thumbnail(array(90,200)); ?></div>
                        </div>
                        <div class="col-md-7" style="padding-left:20px;">
                      <p style=" font-size: 14px; line-height: 13px;"><a style="text-decoration: none;" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                      </div>
                      </div>
                      <?php endwhile; endif; ?>
                      <?php wp_reset_query(); ?>
                    </div>

                     <div class="col-md-3">
                    <?php query_posts('showposts=1&cat=4'); ?>
                      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <div class="row">
                        <div class="col-md-5">
                        <div><?php the_post_thumbnail(array(90,200)); ?></div>
                        </div>
                        <div class="col-md-7" style="padding-left:20px;">
                      <p style=" font-size: 14px; line-height: 13px;"><a style="text-decoration: none;" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                      </div>
                      </div>
                      <?php endwhile; endif; ?>
                      <?php wp_reset_query(); ?>
                    </div>


                    <div class="col-md-3">
                    <?php query_posts('showposts=1&cat=4'); ?>
                      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <div class="row">
                        <div class="col-md-5">
                        <div><?php the_post_thumbnail(array(90,200)); ?></div>
                        </div>
                        <div class="col-md-7" style="padding-left:20px;">
                      <p style=" font-size: 14px; line-height: 13px;"><a style="text-decoration: none;" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                      </div>
                      </div>
                      <?php endwhile; endif; ?>
                      <?php wp_reset_query(); ?>
                    </div>

                   <div class="col-md-3">
                    <?php query_posts('showposts=1&cat=4'); ?>
                      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <div class="row">
                        <div class="col-md-5">
                        <div><?php the_post_thumbnail(array(90,200)); ?></div>
                        </div>
                        <div class="col-md-7" style="padding-left:20px;">
                      <p style=" font-size: 14px; line-height: 13px;"><a style="text-decoration: none;" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                      </div>
                      </div>
                      <?php endwhile; endif; ?>
                      <?php wp_reset_query(); ?>
                    </div>


            
          </div>
          </div>
          
  <div class="br"></div>
        </div>



          <!-- end shirsa sangbad row -->

          
          <div class="row">
            <?php dynamic_sidebar('after_lead_ad');?>
         </div>

        <div class="row">
        <div class="col-md-12 br"></div>
        <div class="col-md-4">
        <div class="line"><p>বাংলাদেশ</p></div>
      <div class="row">
          <div class="col-md-12">
            <div class="one">
            <?php query_posts('showposts=1&cat=3'); ?>
              <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <div><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(260, 300));?></a></div>
              <div><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
              <p style="text-aligh:justify; font-size:18px;"><?php read_more(10);?><a href="<?php the_permalink();?>">আরো পড়ুন</a></p>
              <?php endwhile; endif; ?>
              <?php wp_reset_query(); ?>
            </div>

          </div>

          <div class="col-md-12">
                    <?php query_posts('showposts=4&cat=4'); ?>
                      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <div class="row br">
                        <div class="col-md-5">
                        <div><?php the_post_thumbnail(array(90,200)); ?></div>
                        </div>
                        <div class="col-md-7" style="padding-left:20px;">
                      <p style=" font-size: 14px; line-height: 13px;"><a style="text-decoration: none;" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                      </div>
                      </div>
                      <?php endwhile; endif; ?>
                      <?php wp_reset_query(); ?>
                    </div>

        </div>
          
        </div>

        <div class="col-md-4">
        <div class="line"><p>রাজনীতি</p></div>
      <div class="row">
         <div class="col-md-12">
            <div class="one">
            <?php query_posts('showposts=1&cat=3'); ?>
              <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <div><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(260, 300));?></a></div>
              <div><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
              <p style="text-aligh:justify; font-size:18px;"><?php read_more(10);?><a href="<?php the_permalink();?>">আরো পড়ুন</a></p>
              <?php endwhile; endif; ?>
              <?php wp_reset_query(); ?>
            </div>
          </div>

          <div class="col-md-12">
                    <?php query_posts('showposts=4&cat=4'); ?>
                      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <div class="row br">
                        <div class="col-md-5">
                        <div><?php the_post_thumbnail(array(90,200)); ?></div>
                        </div>
                        <div class="col-md-7" style="padding-left:20px;">
                      <p style=" font-size: 14px; line-height: 13px;"><a style="text-decoration: none;" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                      </div>
                      </div>
                      <?php endwhile; endif; ?>
                      <?php wp_reset_query(); ?>
                    </div>


        </div>
          
        </div>

        <div class="col-md-4">
        <div class="line"><p>অর্থনীতি</p></div>
      <div class="row">
          <div class="col-md-12">
            <div class="one">
            <?php query_posts('showposts=1&cat=3'); ?>
              <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <div><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(260, 300));?></a></div>
              <div><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
              <p style="text-aligh:justify; font-size:18px;"><?php read_more(10);?><a href="<?php the_permalink();?>">আরো পড়ুন</a></p>
              <?php endwhile; endif; ?>
              <?php wp_reset_query(); ?>
            </div>
          </div>

          <div class="col-md-12">
                    <?php query_posts('showposts=4&cat=4'); ?>
                      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <div class="row br">
                        <div class="col-md-5">
                        <div><?php the_post_thumbnail(array(90,200)); ?></div>
                        </div>
                        <div class="col-md-7" style="padding-left:20px;">
                      <p style=" font-size: 14px; line-height: 13px;"><a style="text-decoration: none;" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                      </div>
                      </div>
                      <?php endwhile; endif; ?>
                      <?php wp_reset_query(); ?>
                    </div>

        </div>
        </div>

        </div>

        <div class="br"></div>

        <div class="row">
        <div class="col-md-6">
        <div class="line"><p>ছবি ঘর</p></div>
      <div class="row">
          <div class="col-md-12">
          <div class="one">
          <div class="mySlides">
            <?php query_posts('showposts=1&cat=3'); ?>
              <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <div><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(370, 620));?></a></div>
              <?php endwhile; endif; ?>
              <?php wp_reset_query(); ?>
          </div>
          <div class="mySlides">
            <?php query_posts('showposts=1&cat=4'); ?>
              <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <div><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(370, 620));?></a></div>
              <?php endwhile; endif; ?>
              <?php wp_reset_query(); ?>
          </div>
          <div class="mySlides">
            <?php query_posts('showposts=1&cat=6'); ?>
              <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <div><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(370, 620));?></a></div>
              <?php endwhile; endif; ?>
              <?php wp_reset_query(); ?>
          </div>
          </div>
            
          </div>
        </div>
          
        </div>


        <div class="col-md-6">
        <div class="line"><p>বিনোদন</p></div>
      <div class="row">
          <div class="col-md-12">
          <div class="one">
            <?php query_posts('showposts=1&cat=6'); ?>
              <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <div><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(370, 620));?></a></div>
              <div><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
              <?php endwhile; endif; ?>
              <?php wp_reset_query(); ?>
            </div>
         
          <h4>বিনোদন-এর আরো সংবাদ</h4>
          <div class="two">
            <?php query_posts('showposts=3&cat=6'); ?>
              <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <div><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
              <?php endwhile; endif; ?>
              <?php wp_reset_query(); ?>
              </div>
          </div>
        </div>
          
        </div>



        </div>
        
          <div class="br"></div>

          <div class="line"><p>বিশ্ব</p></div>
          <div class="row">
      <div class="col-md-6">
          <div class="shirsa">
            <?php query_posts('showposts=1&cat=4'); ?>
              <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <div class="shirsa1"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(408, 620));?></a></div>
              <?php endwhile; endif; ?>
              <?php wp_reset_query(); ?>
              </div>
          </div>

          <div class="col-md-6">
          <div class="shirsa_title">
            <?php query_posts('showposts=1&cat=4'); ?>
              <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <div><a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a></div>
              <div class="shirsa_content"><p><?php read_more(40);?><a href="<?php the_permalink();?>">আরো পড়ুন</a></p></div>
              <?php endwhile; endif; ?>
              <?php wp_reset_query(); ?>
              </div>
          </div>
        
    
           <div class="col-md-12">
          <div class="br"></div>
          <div class="row">
            <div class="col-md-3">
            <?php query_posts('showposts=1&cat=3'); ?>
              <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div><?php the_post_thumbnail(array(190,200)); ?></div>
              <div><a href="<?php the_permalink(); ?>"><p><?php the_title(); ?></p></a></div>
              <?php endwhile; endif; ?>
              <?php wp_reset_query(); ?>
            </div>

            <div class="col-md-3">
            <?php query_posts('showposts=1&cat=3'); ?>
              <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div><?php the_post_thumbnail(array(190,200)); ?></div>
              <div><a href="<?php the_permalink(); ?>"><p><?php the_title(); ?></p></a></div>
              <?php endwhile; endif; ?>
              <?php wp_reset_query(); ?>
            </div>

            <div class="col-md-3">
            <?php query_posts('showposts=1&cat=3'); ?>
              <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div><?php the_post_thumbnail(array(190,200)); ?></div>
              <div><a href="<?php the_permalink(); ?>"><p><?php the_title(); ?></p></a></div>
              <?php endwhile; endif; ?>
              <?php wp_reset_query(); ?>
            </div>

            <div class="col-md-3">
            <?php query_posts('showposts=1&cat=3'); ?>
              <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div><?php the_post_thumbnail(array(190,200)); ?></div>
              <div><a href="<?php the_permalink(); ?>"><p><?php the_title(); ?></p></a></div>
              <?php endwhile; endif; ?>
              <?php wp_reset_query(); ?>
            </div>

            
          </div>
          </div>
        </div> <!-- end bishwa catagory row -->


        <div class="br"></div>

        <div class="row">
        <div class="col-md-4">
        <div class="line"><p>খেলাধুলা</p></div>
      <div class="row">
          <div class="col-md-12">
            <div class="one">
            <?php query_posts('showposts=1&cat=3'); ?>
              <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <div><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(260, 300));?></a></div>
              <div><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
              <p style="text-align:justify; font-size:18px;"><?php read_more(10);?><a href="<?php the_permalink();?>">আরো পড়ুন</a></p>
              <?php endwhile; endif; ?>
              <?php wp_reset_query(); ?>
            </div>
          </div>

          <div class="col-md-12">
                    <?php query_posts('showposts=4&cat=4'); ?>
                      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <div class="row br">
                        <div class="col-md-5">
                        <div><?php the_post_thumbnail(array(90,200)); ?></div>
                        </div>
                        <div class="col-md-7" style="padding-left:20px;">
                      <p style=" font-size: 14px; line-height: 13px;"><a style="text-decoration: none;" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                      </div>
                      </div>
                      <?php endwhile; endif; ?>
                      <?php wp_reset_query(); ?>
                    </div>


        </div>
          
        </div>

        <div class="col-md-4">
        <div class="line"><p>গ্রাম-বাংলা</p></div>
      <div class="row">
         <div class="col-md-12">
            <div class="one">
            <?php query_posts('showposts=1&cat=3'); ?>
              <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <div><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(260, 300));?></a></div>
              <div><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
              <p style="text-aligh:justify; font-size:18px;"><?php read_more(10);?><a href="<?php the_permalink();?>">আরো পড়ুন</a></p>
              <?php endwhile; endif; ?>
              <?php wp_reset_query(); ?>
            </div>
          </div>

          <div class="col-md-12">
                    <?php query_posts('showposts=4&cat=4'); ?>
                      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <div class="row br">
                        <div class="col-md-5">
                        <div><?php the_post_thumbnail(array(90,200)); ?></div>
                        </div>
                        <div class="col-md-7" style="padding-left:20px;">
                      <p style=" font-size: 14px; line-height: 13px;"><a style="text-decoration: none;" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                      </div>
                      </div>
                      <?php endwhile; endif; ?>
                      <?php wp_reset_query(); ?>
                    </div>


        </div>
          
        </div>

        <div class="col-md-4">
        <div class="line"><p>শিক্ষা</p></div>
      <div class="row">
         <div class="col-md-12">
            <div class="one">
            <?php query_posts('showposts=1&cat=3'); ?>
              <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <div><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(260, 300));?></a></div>
              <div><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
              <p style="text-aligh:justify; font-size:18px;"><?php read_more(10);?><a href="<?php the_permalink();?>">আরো পড়ুন</a></p>
              <?php endwhile; endif; ?>
              <?php wp_reset_query(); ?>
            </div>
          </div>
          <div class="col-md-12">
                    <?php query_posts('showposts=4&cat=4'); ?>
                      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <div class="row br">
                        <div class="col-md-5">
                        <div><?php the_post_thumbnail(array(90,200)); ?></div>
                        </div>
                        <div class="col-md-7" style="padding-left:20px;">
                      <p style=" font-size: 14px; line-height: 13px;"><a style="text-decoration: none;" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                      </div>
                      </div>
                      <?php endwhile; endif; ?>
                      <?php wp_reset_query(); ?>
                    </div>

          
        </div>
          
        </div>

        </div>

         


    </div>

    <?php get_sidebar();?>
    <?php get_footer();?>





