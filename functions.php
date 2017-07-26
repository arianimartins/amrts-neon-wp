<?php 

//Carrega folha de estilo
	function add_theme_scripts(){
		wp_enqueue_style('style', get_stylesheet_uri(), false, '1.1', 'all');
		wp_enqueue_script('scripts', get_template_directory_uri() .'/js/scripts.js', array('jquery'), null, true);
	}
	add_action('wp_enqueue_scripts', 'add_theme_scripts');


//Desabilitar AdminBar
	show_admin_bar(false);

//Theme Supports
	add_theme_support('post-thumbnails', array('post')); //Imagem destacada (apenas posts)
	add_theme_support('html5', array('search-form', 'gallery', 'caption', 'comment-form', 'comment-list')); //HTML5
	add_theme_support('automatic-feed-links'); //Feed Links
	add_theme_support('title-tag'); //Title
	add_theme_support('post-formats', array('quote')); //Tipo de post FRASE
	add_theme_support('customize-selective-refresh-widgets');
	
//Tipografia do tema no editor de texto
	function cd_add_editor_styles(){
		add_editor_style(get_template_directory_uri().'/css/editor.css');
	}
	add_action('init', 'cd_add_editor_styles');

//Alterar cores do tema
	require('customizer.php');
	function cd_customizer(){
		wp_enqueue_script('customizer', get_template_directory_uri().'/customizer.js', array('jquery', 'customize-preview'), '', true);
	}
	add_action('customize_preview_init', 'cd_customizer');

	//add_theme_support('custom-logo'); //Logo Personalizado
	//add_theme_support('custom-background'); //Fundo personalizado

//Header
	function register_custom_header(){
		$header_args = array(
			'uploads' => true,
			'header-text' => false,
			'video' => true,
			'video-active-callback'=> 'all',
			'wp-head-callback' => '',
			'admin-head-callback' => '',
			'admin-preview-callback' => '',
		);
		add_theme_support('custom-header', $header_args);

		$header_opt = array(
			'muro' => array(
				'url' => get_template_directory_uri().'/img/LogoWall.jpg',
				'thumbnail_url' => get_template_directory_uri().'/img/LogoWall.jpg',
				'description' => 'Muro',
			),
		);
		register_default_headers($header_opt);
	}
	add_action('after_setup_theme','register_custom_header');



//Content Width
	if(!isset($content_width)) $content_width = 900;

//Adicionar Menus
	register_nav_menus(array('principal' => 'Menu Principal'));	
	
//Adiciona Imagem de Destaque no feed RSS
	function featuredtoRSS($content) {
		global $post;
		if (has_post_thumbnail($post->ID)){
			$content = '<div>'.get_the_post_thumbnail($post->ID, 'medium', array('style'=>'margin-bottom:15px;')).'</div>'.$content;
		}
		return $content;
	}
	add_filter('the_excerpt_rss', 'featuredtoRSS');
	add_filter('the_content_feed', 'featuredtoRSS');

//Sidebar e Widgets
	add_action('widgets_init', 'arianimartins_widgets_init');
	function arianimartins_widgets_init(){
		register_sidebar(array(
			'name' => 'Sidebar',
			'id' => 'sidebar',
			'description' => 'Barra Lateral',
			'class' => 'widget-sidebar',
			'before_widget' => '<div align="center" class="widget-sidebar">',
			'after_widget' => '</div>',
			'before_title' => '<h1 class="widget-sidebar-title">',
			'after_title' => '</h1>',
			));

		//Adicionar Widget Área para o Footer
		register_sidebar(array(
			'name' => 'Footer Esquerda',
			'id' => 'footer-esquerda',
			'description' => 'Área de Widgets do Footer (Esquerda)',
			'class' => 'widget-footer',
			'before_widget' => '<div class="widget-footer">',
			'after_widget' => '</div>',
			'before_title' => '<h1 class="widget-footer-title">',
			'after_title' => '</h1>',
			));

		register_sidebar(array(
			'name' => 'Footer Centro',
			'id' => 'footer-centro',
			'description' => 'Área de Widgets do Footer (Centro)',
			'class' => 'widget-footer',
			'before_widget' => '<div class="widget-footer">',
			'after_widget' => '</div>',
			'before_title' => '<h1 class="widget-footer-title">',
			'after_title' => '</h1>',
			));

		register_sidebar(array(
			'name' => 'Footer Direita',
			'id' => 'footer-direita',
			'description' => 'Área de Widgets do Footer (Direita)',
			'class' => 'widget-footer',
			'before_widget' => '<div class="widget-footer">',
			'after_widget' => '</div>',
			'before_title' => '<h1 class="widget-footer-title">',
			'after_title' => '</h1>',
			));
	}

//Atualiza a data do Copyright
	function copyright_date() {
		global $wpdb;
		$copyright_dates = $wpdb->get_results("
			SELECT
			YEAR(min(post_date_gmt)) AS firstdate,
			YEAR(max(post_date_gmt)) AS lastdate
			FROM
			$wpdb->posts
			WHERE
			post_status = 'publish'
			");
		$output = '';
		if($copyright_dates) {
			$copyright = "© " . $copyright_dates[0]->firstdate;
			if($copyright_dates[0]->firstdate != $copyright_dates[0]->lastdate) {
				$copyright .= '-' . $copyright_dates[0]->lastdate;
			}
			$output = $copyright;
		}
		return $output;
	}

//Function by madlyluv.com - Paginação
	function afc_paginacao($pages = '', $range = 4){  
	    $showitems = ($range * 2)+1;  
	    global $paged;
	    if(empty($paged)) $paged = 1;
		 
	    if($pages == ''){
	        global $wp_query;
	        $pages = $wp_query->max_num_pages;
	        if(!$pages){
	            $pages = 1;
	        }
	    }   

	    if(1 != $pages){
	        echo "<div class='post-paginacao'>\n<div class='paginacao'><span class='inicio'>Página ".$paged." de ".$pages."</span>";
	        if($paged > 2 && $paged > $range+1 && $showitems < $pages)
	        	echo "<a href='".get_pagenum_link($paged - 1)."' class='current'><strong>&laquo;</strong></a>";
	        if($paged > 3 && $showitems < $pages)
	        	echo "<a href='".get_pagenum_link(1)."'><strong>1</strong></a> <span class='current'><strong>...</strong></span>";

	        for ($i=1; $i <= $pages; $i++){
	            if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )){
	                echo ($paged == $i)? "<span class='current'><strong>".$i."</strong></span>":"<a href='".get_pagenum_link($i)."' class='inactive'><strong>".$i."</strong></a>";
	            }
	        }

	        if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages)
	        	echo "<span class='current'><strong>...</strong></span> <a href='".get_pagenum_link($pages)."'><strong>$pages</strong></a>";
	        if ($paged < $pages && $showitems < $pages)
	        	echo "<a href='".get_pagenum_link($paged + 1)."' class='final'><strong>Próximo</strong></a>"; 
	        echo "</div>\n</div>";
	    }
	}


?>