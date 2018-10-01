<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package evemoo
 */

get_header();
?> 

<div class="container-fluid" style="padding-top: 6%;">
<div class="owl-carousel owl-theme owl-loaded">
    <div class="owl-stage-outer">
        <div class="owl-stage">
         <?php
while (have_posts()):the_post();
    ?>
     <div class="owl-item">
              <a href="<?php the_permalink( $post->ID )?>">
              <div class="images">
             <?php if( has_post_thumbnail()) : ?>
                      

                      <?php the_post_thumbnail(array(100, 100) ); ?>

                       <?php else : ?>

                        <span class="img-circle"><h6>no image</h6></span>
                        <?php endif; ?> 
              </div>
              <div class="text">
               <h1> <?php the_title();?></h1>
             <h4><?php the_author();?></h4>
             </div>
             </a>
            </div>
        <?php endwhile;?>
           
         
        
    </div>
    <div class="owl-nav"> 
        <div class="owl-prev"><i class="fas fa-arrow-left"></i></div>
        <div class="owl-next"><i class="fas fa-arrow-right"></i></div>
    </div>
   
</div>
</div>



<div class="container box">
  <div class="row">
      <?php
      $loop=new WP_Query(array(
          'post_type'=>'latest_home',
          'orderby'=>'post_id',
          'order'=>'ASC',
          'posts_per_page'=>10,
      ));
      while ($loop->have_posts()):$loop->the_post();
?>
<a href="<?php the_permalink( $post ->ID )?>">
<div class="postt">
            <div class="itemimage">
               <?php if( has_post_thumbnail()) : ?>
                                

                                <?php the_post_thumbnail(array(400, 400) ); ?>

                                 <?php else : ?>

                                  <span class="img-circle"><h6>no image</h6></span>
                                  <?php endif; ?> 
            </div>
                      <div class="item1">
                                      <div class="heading" style="padding-bottom: 2%;">
                                      <?php  the_title();?>
                                      </div>
                              <?php the_excerpt();?></p>

                            <p>By Rabin Awale</p>
                      </div> 
</div>
</a>
<?php
      endwhile;
      ?>
  </div>
</div>

<?php
get_footer();
