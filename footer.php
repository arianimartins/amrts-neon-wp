<a href="#" class="topbutton">
	<i class="fa fa-angle-up fa-lg"></i>
</a>
<footer id="footer-page">
	<div class="footer-content zigzag-footer">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Esquerda')) : ?>
		<?php endif; ?>
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Centro')) : ?>
		<?php endif; ?>
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Direita')) : ?>
		<?php endif; ?>
	</div>
	<div class="copyright">
		<?php echo copyright_date(); ?> - Todos os direitos reservados - <a href="#">Ariani Martins</a>
	</div>
</footer>

</div>
	<?php wp_footer(); ?>
</body>
</html>