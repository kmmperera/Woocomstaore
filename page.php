

<?php get_header(); ?>

<div class="h-padding">

     <div class="index-post-wrapper">  
            <h1 class="normal-page-title"><?php the_title(); ?></h1>
            <div class="teacher-thumbnail">
                       
                   <?php 
                   $productornot=is_product();
                   if ( has_post_thumbnail() && !$productornot  ) :
                                   $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'large' ); ?>
                                   <img class="index-featured-img" src="<?php echo $featured_image[0]; ?>" alt="" />
                   <?php endif; ?>
                   
           </div>

           <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

           <?php the_content(); ?>

           <?php endwhile;
           else : endif; ?>

      </div>     
 </div>

               
<?php get_footer(); ?>
