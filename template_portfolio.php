<?php /* Template Name: Portfolio template */ get_header(); ?>

<?php get_header(); ?>

		<?php
			$args_folio = array(
				'post_type' => 'galerie',
				'posts_per_page' => -1
			);
			$folio = new WP_Query($args_folio);
		?>

		<?php if($folio->have_posts()):?>
		
		<div class="wrapper-folio">	
		
		    <div class="grid-sizer"></div>
		    
            <?php while($folio-> have_posts()) : $folio->the_post(); ?>


            <div class="single-folio">
                    
                    <div class="img-folio">
                        <?php the_post_thumbnail();?>
                    </div>           
                    
                    <div class="folio-hover">
                       <h2><?php the_title();?></h2>
                       <p><?php the_excerpt();?></p>
                       <a href="<?php the_permalink();?>" class="bt">Voir le projet</a>
                    </div>

               </div>

            <?php endwhile;?>
		
		</div>

		<?php endif;?>
		
		<?php wp_reset_query(); ?>

<?php get_footer(); ?>