<?php /* Template Name: Offres */ get_header(); ?>
        
        <?php
			$args_offres = array(
                'post_type' => 'page',
				'post_parent' => $post->ID,
				'posts_per_page' => -1
			);
			$offres = new WP_Query($args_offres);
		?>

		<?php if($offres->have_posts()): ?>
		
		<ul class="tab-menu">                  
            <li class="active" data-id="tab61"><a href="#mie">Côté <span>Mie</span></a></li>            		    
            <li class="" data-id="tab63"><a href="#celine">Côté <span>Céline</span></a></li>            		    
		</ul>
		
		<div class="tab-content">

            <?php while ($offres->have_posts()) : $offres->the_post(); ?>
            
            <div class="tab tab<?php echo $post->ID;?>">

                <div class="header-offre">
                    <h1><?php the_title();?></h1>
                    <p><?php the_field('sous-titre');?></p>
                </div>

                <div class="wrapper-img-offre">
                    <div class="img-offre">
                        <?php $offre_img = get_field('image'); ?>
                        <div class="border-offre">
                            <img src="<?php echo $offre_img['url']; ?>" alt="">
                        </div>		    
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
                    <?php 
                        // thumbnail
                        $size = 'moyenne';
                        $thumb = $prestation_img['sizes'][ $size ];
                        $width = $prestation_img['sizes'][ $size . '-width' ];
                        $height = $prestation_img['sizes'][ $size . '-height' ];
                    ?>
                        
                        	    	    

                        <div class="single-presta">
                            <div class="img-presta">
                                <img src="<?php echo $thumb; ?>" alt="">
                            </div>
                            <h3><?php the_sub_field('titre_prestation'); ?></h3>
                            <p><?php the_sub_field('texte_prestation'); ?></p>
                        </div>		    

                    <?php endwhile;?>

                    </div>		    

                </div>

                <?php endif; ?>
            
            </div><!-- .tab -->

            <?php endwhile; ?>
		
		</div><!-- .tab-content -->
		
		<?php endif; ?>
		
		<?php wp_reset_query(); ?>

<?php get_footer(); ?>