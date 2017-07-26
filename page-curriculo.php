<?php
	/* template name: Currículo */
	get_header()
?>
<section class="main-section">
	<section class="content-section curriculo-page">
		<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
			<article class="full-article">
				<?php include('curriculo.php'); ?>
			</article>
		<?php endwhile; ?>
		<?php else : ?>
			Nada encontrado
		<?php endif; ?>
		<?php afc_paginacao(); ?>
	</section>
	<!--<aside>
		<?php // get_sidebar()?>
	</aside>-->
</section>
<?php get_footer()?>