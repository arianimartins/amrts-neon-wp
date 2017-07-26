<?php 

function cd_customizer_settings($wp_customize){
		$wp_customize->add_section('cd_colors', array(
			'title'=>'Cores',
			'priority'=>30
		));

		$wp_customize->add_setting('cor_destaque', array(
				'default'=>'#4CAF50',
				'transport'=>'postMessage',
			),
			array('sanitize_callback' => '__return_false',));

		$wp_customize->add_setting('cor_deg_1', array(
				'default'=>'#c5e1a5',
				'transport'=>'postMessage',
			),
			array('sanitize_callback' => '__return_false',)
		);

		$wp_customize->add_setting('cor_deg_2', array(
				'default'=>'#aed581',
				'transport'=>'postMessage',
			),
			array('sanitize_callback' => '__return_false',));

		$wp_customize->add_setting('cor_deg_3', array(
				'default'=>'#a5d6a7',
				'transport'=>'postMessage',
			),
			array('sanitize_callback' => '__return_false',));

		$wp_customize->add_setting('cor_titulos_icones', array(
				'default'=>'#111111',
				'transport'=>'postMessage',
			),
			array('sanitize_callback' => '__return_false',));

		$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'cor_destaque', array(
			'label'=>'Cor de Destaque',
			'section'=>'cd_colors',
			'settings'=>'cor_destaque',
		)));

		$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'cor_deg_1', array(
			'label'=>'Cor CV 1',
			'section'=>'cd_colors',
			'settings'=>'cor_deg_1',
		)));

		$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'cor_deg_2', array(
			'label'=>'Cor CV 2',
			'section'=>'cd_colors',
			'settings'=>'cor_deg_2',
		)));

		$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'cor_deg_3', array(
			'label'=>'Cor CV 3',
			'section'=>'cd_colors',
			'settings'=>'cor_deg_3',
		)));

		$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'cor_titulos_icones', array(
			'label'=>'Cor dos Títulos e Ícones',
			'section'=>'cd_colors',
			'settings'=>'cor_titulos_icones',
		)));
	}
	add_action('customize_register', 'cd_customizer_settings');

	function cd_customizer_css(){
		?>
			<style type="text/css">
				.widget-footer li a{ color: <?php echo get_theme_mod('cor_destaque','#4CAF50')?>; }
				.topbutton{ background-color: <?php echo get_theme_mod('cor_destaque','#4CAF50')?>; }
				.tagcloud a{ color: <?php echo get_theme_mod('cor_destaque','#4CAF50')?>; }
				.tagcloud a:hover{ background: <?php echo get_theme_mod('cor_destaque','#4CAF50')?>; }
				#today{ background: <?php echo get_theme_mod('cor_destaque','#4CAF50')?>; }
				.social-icons-profile-material i{ color: <?php echo get_theme_mod('cor_destaque','#4CAF50')?>; }
				.widget-profile-material a{ color: <?php echo get_theme_mod('cor_destaque','#4CAF50')?>; }
				.icon-close:before, .icon-search:before{ color: <?php echo get_theme_mod('cor_destaque','#4CAF50')?>; }
				.menu-header ul li:hover{ border-bottom-color: <?php echo get_theme_mod('cor_destaque','#4CAF50')?>; }
				ul.sub-menu:before{ border-bottom-color: <?php echo get_theme_mod('cor_destaque','#4CAF50')?>; }
				.paginacao a:hover{ background: <?php echo get_theme_mod('cor_destaque','#4CAF50')?>; }
				.wpp-list a{ color: <?php echo get_theme_mod('cor_destaque','#4CAF50')?>; }
				.cat-item:hover{ color: <?php echo get_theme_mod('cor_destaque','#4CAF50')?>; }
				#mc_embed_signup input[type="submit"]{ background-color: <?php echo get_theme_mod('cor_destaque','#4CAF50')?>; }
				.widget-footer-title{ color: <?php echo get_theme_mod('cor_destaque','#4CAF50')?>; }
				h1.widget-footer-title:after, h1.widget-footer-title:before{ background: <?php echo get_theme_mod('cor_destaque','#4CAF50')?>; }
				#calendar_wrap{background: linear-gradient(0deg, rgba(255, 255, 255, .4), <?php echo get_theme_mod('cor_destaque','#4CAF50')?>), url(https://snap-photos.s3.amazonaws.com/img-thumbs/280h/HZZKGVVJ6I.jpg) no-repeat center}

				.cv-profissao{color: <?php echo get_theme_mod('cor_destaque','#4CAF50')?>;}
				.timeline-ladod{border-left-color: <?php echo get_theme_mod('cor_destaque','#4CAF50')?>;}
				.cv-portfolio .cv-sub-desc:before{color: <?php echo get_theme_mod('cor_destaque','#4CAF50')?>;}
  				.cv-timeline .cv-sub-cargo:before{color: <?php echo get_theme_mod('cor_destaque','#4CAF50')?>;}

  				p.prompt.erro404{background: <?php echo get_theme_mod('cor_destaque','#4CAF50')?>;}
  				.terminal .prompt{color: <?php echo get_theme_mod('cor_destaque','#4CAF50')?>;}
  				.terminal .new-output:after{background: <?php echo get_theme_mod('cor_destaque','#4CAF50')?>;}

  				.view-comentarios .comment-body a{color: <?php echo get_theme_mod('cor_destaque','#4CAF50')?>;}
      			.comment-body .reply a{background: <?php echo get_theme_mod('cor_destaque','#4CAF50')?>;}
      			.view-comentarios .bypostauthor .comment-body{border-left-color: <?php echo get_theme_mod('cor_destaque','#4CAF50')?>;}
      			span#mylastpost a{color: <?php echo get_theme_mod('cor_destaque','#4CAF50')?>;}
      			#cancel-comment-reply-link{color: <?php echo get_theme_mod('cor_destaque','#4CAF50')?>;}
      			.full-article .comentar a{color: <?php echo get_theme_mod('cor_destaque','#4CAF50')?>;}
      			input#submit{background: <?php echo get_theme_mod('cor_destaque','#4CAF50')?>;}
  				
  				.progress-skill div{background: linear-gradient(90deg, <?php echo get_theme_mod('cor_deg_1','#c5e1a5')?>, <?php echo get_theme_mod('cor_deg_2','#aed581')?>, <?php echo get_theme_mod('cor_deg_3','#a5d6a7')?>);
  					background: -moz-linear-gradient(90deg, <?php echo get_theme_mod('cor_deg_1','#c5e1a5')?>, <?php echo get_theme_mod('cor_deg_2','#aed581')?>, <?php echo get_theme_mod('cor_deg_3','#a5d6a7')?>);
  					background: -webkit-linear-gradient(360deg, <?php echo get_theme_mod('cor_deg_1','#c5e1a5')?>, <?php echo get_theme_mod('cor_deg_2','#aed581')?>, <?php echo get_theme_mod('cor_deg_3','#a5d6a7')?>);
  				}

				h1, h2, h3, h4, h5, h6{color: <?php echo get_theme_mod('cor_titulos_icones','#111111')?>;}
  				.post-detail i'{color: <?php echo get_theme_mod('cor_titulos_icones','#111111')?>;}

			</style>
		<?php
	}
	add_action('wp_head', 'cd_customizer_css');
?>