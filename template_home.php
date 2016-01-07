<?php /* Template Name: Home template */ get_header(); ?>

<?php get_header(); ?>
   
   <?php 
        $slider_img = get_field('image_de_fond');
    ?>
    
   <div class="slider" style="background-image: url('<?php echo $slider_img['url']; ?>');">
       <div class="slider-text">
            <?php include('arabesque.php');?>
            <h1><?php the_field('titre');?></h1>
            <p><?php the_field('sous-titre');?></p>
            <?php include('arabesque.php');?>
       </div>
       
       <div class="wrapper-bt">
           <a href="<?php the_field('lien_bouton');?>" class="bt"><?php the_field('texte_bouton');?></a>
       </div>
   </div>
    
    <?php include('arabesque.php');?>

	<main role="main">
		<!-- section -->
		<section>

			<h1><?php the_title(); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>