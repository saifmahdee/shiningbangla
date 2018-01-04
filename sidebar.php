<div class="col-md-3" id="aside">
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'lastSide')" id="defaultOpen">সর্বশেষ সংবাদ</button>
  <button class="tablinks" onclick="openCity(event, 'mostSide')">সর্বাধিক পঠিত</button>
</div>

<div id="lastSide" class="tabcontent">
   <?php query_posts('showposts=10&cat=56'); ?>
                      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                      <p style=" font-size: 18px;"><i style="padding-right: 5px; color: green;" class="fa fa-caret-right" aria-hidden="true"></i><a style="text-decoration: none;" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                      <?php endwhile; endif; ?>
                      <?php wp_reset_query(); ?>
</div>

<div id="mostSide" class="tabcontent">
   <?php query_posts('showposts=10&cat=57'); ?>
                      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                      <p style=" font-size: 18px;"><i style="padding-right: 5px; color: green;" class="fa fa-caret-right" aria-hidden="true"></i><a style="text-decoration: none;" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                      <?php endwhile; endif; ?>
                      <?php wp_reset_query(); ?>
</div>

<div class="br"></div>
<?php dynamic_sidebar('side_ad_1');?>

<div class="row">
<div class="col-md-12 br"></div>
</div>

<div class="line"><p>মতামত</p></div>
    <div class="br"></div>
      <div class="row">
          <div class="col-md-12">
            <?php query_posts('showposts=1&cat=8'); ?>
              <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <div><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(265, 610));?></a></div>
              <div><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
              <?php endwhile; endif; ?>
              <?php wp_reset_query(); ?>
            </div>
        </div>

<div class="br"></div>

<div class="line"><p>সাক্ষাৎকার</p></div>

<div class="br"></div>

      <div class="row">
          <div class="col-md-12">
            <?php query_posts('showposts=1&cat=41'); ?>
              <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <div><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(265, 610));?></a></div>
              <div><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
              <?php endwhile; endif; ?>
              <?php wp_reset_query(); ?>
          </div>
        </div>
        
<div class="br"></div>
<div class="line"><p>আর্কাইভ</p></div>
<div class="br"></div>
<div class="row">
          <div class="col-md-12">
            <?php get_calendar();?>
          </div>
        </div>

<div class="br"></div>
<?php dynamic_sidebar('side_ad_2');?>

<div class="row">
<div class="col-md-12 br"></div>
</div>


<div class="line"><p>সাক্ষাৎকার</p></div>

<div class="br"></div>

      <div class="row">
          <div class="col-md-12">
            <?php query_posts('showposts=1&cat=41'); ?>
              <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <div><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(265, 610));?></a></div>
              <div><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
              <?php endwhile; endif; ?>
              <?php wp_reset_query(); ?>
          </div>
        </div>
        
<div class="br"></div>


<div class="line"><p>সাক্ষাৎকার</p></div>

<div class="br"></div>

      <div class="row">
          <div class="col-md-12">
            <?php query_posts('showposts=1&cat=41'); ?>
              <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <div><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(265, 610));?></a></div>
              <div><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
              <?php endwhile; endif; ?>
              <?php wp_reset_query(); ?>
          </div>
        </div>
        
<div class="br"></div>

<?php dynamic_sidebar('side_ad_3');?>

      
    </div>
    </div>
  </div>
</div>