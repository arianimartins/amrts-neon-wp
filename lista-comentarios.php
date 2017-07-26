<div class="avatar"><?php echo get_avatar($comment, '60'); ?></div>

<?php
	$var = get_comment(get_comment_ID())->user_id;
	if($var == 1) : ?>
		<div class="comment-conteudo author">
	<?php else : ?>
		<div class="comment-conteudo">
	<?php endif; ?>

			<div class="comment-info">
				<?php if($comment->comment_author_url != "" || $comment->comment_author_url != null) : ?>
					<b><a href="<?php comment_author_url(); ?>" rel="nofollow" targer="_blank"><?php comment_author()?></a></b>
				<?php else: ?>
					<b><?php comment_author() ?></b>
				<?php endif; ?>
					em <?php comment_date('d.m.Y'); ?> disse:
			</div>

			<div class="comment-text">
				<?php comment_text(); ?>
				<?php if($comment->comment_approved == '0') : ?>
					<p>Obrigado pelo comentário, <?php comment_author(); ?>. Ele será publicado em breve</p>
				<?php endif; ?>
			</div>

			<div class="comment-options">
				<?php edit_comment_link('Editar', '', ''); echo " | "; ?>
				<?php
					$post_id = get_the_ID();
					$comment_id = get_comment_ID();
					$max_depth = get_option('thread_comments_depth');
					$default = array(
						'add_below' => 'comment',
						'respond_id' => 'respond',
						'reply_text' => __('Responder', 'ariani-martins-neon'),
						'depth' => 1,
						'before' => '',
						'after' => '',
						'max_depth' => $max_depth
					);
				?>
				<?php comment_reply_link($default, $comment_id, $post_id); ?>
			</div>

		</div>