<?php /* Template Name: Single offre */ get_header(); ?>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		
		<div class="header-offre">
		    <h1><?php the_title();?></h1>
		    <p><?php the_field('sous-titre');?></p>
		</div>
		
		<div class="img-offre">
		    <?php $offre_img = get_field('image'); ?>
		    <div class="border-offre">
		        <img src="<?php echo $offre_img['url']; ?>" alt="">
		    </div>		    
		</div>
		
		<div class="content">
		    <?php the_content();?>
		</div>
		
		<?php if(have_rows('prestations')): ?>
		
		<?php include('arabesque.php');?>
		
		<div class="prestations-offre">
		    <h2>Prestations proposées</h2>
		    
		    <div class="wrapper-offres">
		    
		    <?php while(have_rows('prestations')) : the_row(); ?>
		    <?php $prestation_img = get_sub_field('image_prestation'); ?>		    
		    
                <div class="single-presta">
                    <div class="img-presta">
                        <img src="<?php echo $prestation_img['url']; ?>" alt="">
                    </div>
                    <h3><?php the_sub_field('titre_prestation'); ?></h3>
                    <p><?php the_sub_field('texte_prestation'); ?></p>
                </div>		    
		    
		    <?php endwhile;?>
            
            </div>		    
		        
		</div>
		
		<?php endif; ?>
		
		<?php endwhile; endif; ?>
		
		<?php wp_reset_query(); ?>

<?php get_footer(); ?>