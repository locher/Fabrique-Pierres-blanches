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
        ?>
       
       <div class="wrapper-cote">
            <div class="single-cote" style="background-image: url('<?php echo $cote_img['url']; ?>');">
                <div class="single-cote-text">
                    <h2 class="h1"><?php the_sub_field('titre');?></h2>
                    <p><?php the_sub_field('sous-titre');?></p>
                </div>

                <div class="cote-wrapper-bt">
                    <a href="<?php the_sub_field('lien_bouton');?>" class="bt"><?php the_sub_field('texte_bouton');?></a>
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
     
     <!-- Galerie -->
     <div class="galerie">
         <h2>Nos plus belles réalisations</h2>
     </div>
      


<?php get_footer(); ?>