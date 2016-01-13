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
    
    <?php if(have_rows('un_cote')):?>
    <!--Côtés-->
    <div class="cote-wrapper">
       
       <?php
        while(have_rows('un_cote')) : the_row(); 
        $cote_img = get_sub_field('image_de_fond');
        
        // thumbnail
        $size = 'moyenne';
        $thumb = $cote_img['sizes'][ $size ];
        $width = $cote_img['sizes'][ $size . '-width' ];
        $height = $cote_img['sizes'][ $size . '-height' ];
        ?>
       
       <div class="wrapper-cote">
            <div class="single-cote" style="background-image: url('<?php echo $thumb; ?>');">
                <div class="single-cote-text">
                    <h2 class="h1"><?php the_sub_field('titre');?></h2>
                    <p><?php the_sub_field('sous-titre');?></p>
                </div>

                <div class="cote-wrapper-bt">
                    <a href="<?php the_sub_field('lien_bouton');?>#<?php the_sub_field('hash_bouton');?>" class="bt"><?php the_sub_field('texte_bouton');?></a>
                </div>
            </div>
        </div>
        
        <?php endwhile;?>
           
    </div>
    
    <?php endif;?> 
    
    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    
    <div class="content content-home">
		<?php the_content();?>
	</div>
    
    <?php endwhile; endif;?>
    
    <?php include('arabesque.php');?>
     
     <!-- Galerie -->
     <div class="galerie">
         <h2>Nos plus belles réalisations</h2>
     </div>
     
     <?php
			$args_folio = array(
				'post_type' => 'galerie',
				'posts_per_page' => -1,
                'meta_query' => array(
                'relation' => 'AND',
                    array(
                        'key' => 'home',
                        'value' => '1',
                        'compare' => '=='
                    ),
                )
			);
			$folio = new WP_Query($args_folio);
		?>

		<?php if($folio->have_posts()):?>
		
		<div class="wrapper-folio">	
		
		    <div class="grid-sizer"></div>
		    
            <?php while($folio-> have_posts()) : $folio->the_post(); ?>


            <div class="single-folio">
                    
                    <div class="img-folio">
                        <?php the_post_thumbnail('petite');?>
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