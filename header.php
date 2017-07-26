<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Folha de Estilo/Port -->
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/marvel-device-min.css" >
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Lato|Lora|Source+Serif+Pro" rel="stylesheet">
	<!-- Font Awesome -->
	<script src="https://use.fontawesome.com/c1dcf9acab.js"></script>
	<!-- Animacao -->
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/animate.css">
	<!-- Pingback -->
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<!-- Comentarios (Reply) -->
	<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); wp_head(); ?>
	<!-- Domain Verify -->
  	<meta name="p:domain_verify" content="6505e12dad9031dcfa0e377110ead5e2"/>
  	<!-- Google Analytics -->
  	<script>
  		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  			})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  		ga('create', 'UA-63088121-1', 'auto');
  		ga('send', 'pageview');
	</script>
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >
	<div class="main-div">
		<header>
			<nav class="menu-header zigzag-header"><?php wp_nav_menu(array('theme_location'=>'principal')); ?></nav>
			<section class="logo-section">
				<?php if( !has_custom_header() ){ ?>
						<video autoplay loop src="<?php echo esc_url(get_template_directory_uri()); ?>/img/LogoVerde.mp4"></video>
				<?php }else{
						the_custom_header_markup();
					}
				?>
			</section>
		</header>