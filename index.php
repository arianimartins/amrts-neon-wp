<?php get_header()?>

<section class="main-section">
	<section class="content-section">
		<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
			<?php if(has_post_format('quote')) : ?>
				<article class="quote-article" id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
					<div class="quote-title"><?php the_title(); ?></div>
					<div class="quote-content"><?php the_content(); ?></div>
				</article>
			<?php else : ?>
				<article class="min-article" id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
					<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'slide-home' ); ?>
					<?php if($image[0]){ ?>
						<?php include ('resumo-post-img.php'); ?>
					<?php }else{ ?>
						<?php include('resumo-post.php'); ?>
					<?php } ?>
				</article>
			<?php endif; ?>
		<?php endwhile; ?>
		<?php else : ?>
			Não existem post ainda
		<?php endif; ?>
		<?php afc_paginacao(); ?>
	</section>
	<aside>
		<?php get_sidebar()?>
	</aside>
</section>
<?php get_footer()?>