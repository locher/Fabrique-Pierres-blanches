<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<!-- post thumbnail -->
            <?php if (has_post_thumbnail() && !post_password_required()): ?>
                <?php
                    $thumb_id = get_post_thumbnail_id();
                    $thumb_url_array = wp_get_attachment_image_src($thumb_id, '', true);
                    $thumb_url = $thumb_url_array[0];
				?>
				<div class="wrapper-img">
				    <a href="<?php the_permalink(); ?>" class="content-img" style="background-image: url('<?php echo $thumb_url; ?>');"></a>
				</div>
			<?php endif; ?>
		<!-- /post thumbnail -->
		
		<div class="content">
            
            

            <!-- post title -->
            <h2>
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
            </h2>
            <!-- /post title -->

            <!-- post details -->
            <p class="date"><?php the_time('l d F Y'); ?></p>
            <!-- /post details -->        
            <p><?php the_excerpt();?></p>
            
            <a href="<?php the_permalink();?>" class="bt">Voir la suite</a>
        
        </div>
		

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