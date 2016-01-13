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
		
            <ul class="filter-folio">
				<li class="bt-all current-menu"><a href="#">Tout</a></li>
                            <?php	
                $MyWalker = new MyWalker();
                $args = array(
                    'walker' => $MyWalker,
                                'exclude'            => '1',
                                'title_li'           => null,
                                'depth'              => -1,
                                'taxonomy'           => 'category'
                    );
                ?>
                <?php
                wp_list_categories($args);
                ?>
			</ul>
		
		<div class="wrapper-folio">	
		
		    <div class="grid-sizer"></div>
		    
		    
            <?php while($folio-> have_posts()) : $folio->the_post(); ?>
            
            <?php 
            
            $cat = get_the_terms($post->ID, 'category');
            $table_cat=array();
            
            if (is_array($cat) || is_object($cat)){
                foreach ($cat as $val){
                    array_push($table_cat, $val->slug);
                }
            }
            
			?>


            <div class="single-folio <?php foreach($table_cat as $table_cat) echo($table_cat).' ';?>" data-cat="<?php foreach($table_cat as $table_cat) echo($table_cat).' ';?>">
                    
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