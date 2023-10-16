 <?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nomadsun
 */

?>


 <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

     <div class="entry-content">
         <?php get_template_part('template-parts/content-header') ;?>
     </div>

     <?php get_template_part('template-parts/content-text') ;?>




     <!-- Here we put in our gallery component -->
     <?php get_template_part('template-parts/content-gallery') ;?>

     </div><!-- .entry-content -->



     <footer class=" entry-footer">
         <?php get_template_part('template-parts/content-social') ?>
         <?php get_template_part('template-parts/content-explore') ?>
     </footer><!-- .entry-footer -->
 </article><!-- #post-<?php the_ID(); ?> -->