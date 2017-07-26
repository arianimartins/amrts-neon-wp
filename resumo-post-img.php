
	<div class="resumo-posts">
		<div class="img-destaque img-resumo" style="background:url(<?php echo $image[0]; ?>)"></div>
		<a href="<?php the_permalink(); ?>"><h1 class="post-title withimg"><?php the_title(); ?></h1></a>
		<div class="post-detail">
			<i class="fa fa-calendar-o"></i>Data: <?php echo get_the_date('d.m.Y'); ?>&nbsp;
			<i class="fa fa-folder-o"></i>Categoria: <?php the_category(', '); ?>&nbsp;
			<i class="fa fa-hourglass-o"></i><?php post_read_time(); ?>&nbsp;
			<i class="fa fa-comment-o"></i><?php comments_number('Comente','1 comentou','% comentaram'); ?>
		</div>
		<article>
			<?php the_excerpt(); ?>
		</article>
	</div>
