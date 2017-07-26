( function( $ ) {

  	wp.customize( 'cor_destaque', function( value ) {
		value.bind( function( newval ) {
			$( '.widget-footer li a' ).css('color', newval);
			$( '.topbutton' ).css('background-color', newval);
			$( '.tagcloud a' ).css('color', newval);
			$( '.tagcloud a:hover' ).css('background', newval);
			$( '#today' ).css('background', newval);
			$( '.social-icons-profile-material i' ).css('color', newval);
			$( '.widget-profile-material a' ).css('color', newval);
			$( '.icon-close:before, .icon-search:before' ).css('color', newval);
			$( '.menu-header ul li:hover' ).css('border-bottom-color', newval);
			$( 'ul.sub-menu:before' ).css('border-bottom-color', newval);
			$( '.paginacao a:hover' ).css('background', newval);
			$( '.wpp-list a' ).css('color', newval);
			$( '.cat-item:hover' ).css('color', newval);
			$( '#mc_embed_signup input[type="submit"]' ).css('background-color', newval);
			$( '.widget-footer-title' ).css('color', newval);
			$( 'h1.widget-footer-title:after, h1.widget-footer-title:before').css('background', newval);
			$( '#calendar_wrap').css('background','linear-gradient(0deg, rgba(255, 255, 255, .4),'+newval+'), url(https://snap-photos.s3.amazonaws.com/img-thumbs/280h/HZZKGVVJ6I.jpg) no-repeat center');

			$('.cv-profissao').css('color', newval);
			$('.timeline-ladod').css('border-left-color', newval);
			$('.cv-portfolio .cv-sub-desc:before').css('color', newval);
  		$('.cv-timeline .cv-sub-cargo:before').css('color', newval);

  		$('p.prompt.erro404').css('background', newval);
  		$('.terminal .prompt').css('color', newval);
  		$('.terminal .new-output:after').css('background', newval);

      $('.view-comentarios .comment-body a').css('color', newval);
      $('.comment-body .reply a').css('background', newval);
      $('.view-comentarios .bypostauthor .comment-body').css('border-left-color', newval);
      $('span#mylastpost a').css('color', newval);
      $('#cancel-comment-reply-link').css('color', newval);
      $('.full-article .comentar a').css('color', newval);
      $('input#submit').css('background', newval);
		} );
	} );


  	wp.customize('cor_deg_1', function(value){
  		value.bind(function(newval){
  			$('.progress-skill div').css('background','linear-gradient(90deg, '+newval+', '+newval+', '+newval+');');
  		});
  	});

  	wp.customize('cor_deg_2', function(value){
  		value.bind(function(newval){
  			$('.progress-skill div').css('background','linear-gradient(90deg, '+newval+', '+newval+', '+newval+');');
  		});
  	});

  	wp.customize('cor_deg_3', function(value){
  		value.bind(function(newval){
  			$('.progress-skill div').css('background','linear-gradient(90deg, '+newval+', '+newval+', '+newval+');');
  		});
  	});
 
  	wp.customize('cor_titulos_icones', function(value){
  		value.bind(function(newval){
  			$('h1, h2, h3, h4, h5, h6').css('color', newval);
  			$('.post-detail i').css('color', newval);
  		});
  	});

	
} )( jQuery );