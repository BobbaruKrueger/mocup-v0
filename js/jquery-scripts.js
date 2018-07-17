jQuery(document).ready(function ($) {
	
	function btnsave() {
		if ( 
			$('#mainttl').val().length <= $('#mainttl').attr('maxlength') && 
			$('#maintxt').val().length <= $('#maintxt').attr('maxlength') &&
			$('#lnkdsc').val().length <= $('#lnkdsc').attr('maxlength')
		) {
			$('#submit').removeClass('disabled').removeAttr('disabled');
		} else {
			$('#submit').addClass('disabled').attr('disabled');
		}
	}
	
	function inputDisabled() {
		$('#mainttl').addClass('dis').prop('disabled', true);
		$('#maintxt').addClass('dis').prop('disabled', true);
		$('#imagsrc').addClass('dis').prop('disabled', true);
		$('#lnkdsc').addClass('dis').prop('disabled', true);
	}
	
	function fbfeed() {
		if ($('#select_format').val() == 'facebookfeed') {
			$('#FacebookFeed').show().siblings('.formats').hide();
						
			$('#hch').html('('+FacebookFeed_headlinechar+')');			
			$('#mainttl').attr('maxlength', FacebookFeed_headlinechar).removeClass('dis').prop('disabled', false);
			
			$('#mtch').html('('+FacebookFeed_mtextchar+')');
			$('#maintxt').attr('maxlength', FacebookFeed_mtextchar).removeClass('dis').prop('disabled', false);
			
			$('#imagsrc').removeClass('dis').prop('disabled', false);
			
			$('#ldch').html('('+FacebookFeed_linkdescchar+')');
			$('#lnkdsc').attr('maxlength', FacebookFeed_linkdescchar).removeClass('dis').prop('disabled', false);
			
			if ( $('#mainttl').val().length > FacebookFeed_headlinechar ) {
				$('#mainttl').addClass('toomuch');
				$('#submit').addClass('disabled').attr('disabled');
			} 
			if ( $('#mainttl').val().length <= FacebookFeed_headlinechar ) {
				$('#mainttl').removeClass('toomuch');
				$('#submit').removeClass('disabled').removeAttr('disabled');
			} 
			if ( $('#maintxt').val().length > FacebookFeed_mtextchar ) {
				$('#maintxt').addClass('toomuch');
				$('#submit').addClass('disabled').attr('disabled');
			}
			if ( $('#maintxt').val().length <= FacebookFeed_mtextchar ) {
				$('#maintxt').removeClass('toomuch');
				$('#submit').removeClass('disabled').removeAttr('disabled');
			} 
			if ( $('#lnkdsc').val().length > FacebookFeed_linkdescchar ) {
				$('#lnkdsc').addClass('toomuch');
				$('#submit').addClass('disabled').attr('disabled');
			} 
			if ( $('#lnkdsc').val().length <= FacebookFeed_linkdescchar ) {
				$('#lnkdsc').removeClass('toomuch');
				$('#submit').removeClass('disabled').removeAttr('disabled');
			}
			$('#prevBtn').click();
		}
	}
	function fbrc() {
		if ($('#select_format').val() == 'facebookrightcolumn') {
			$('#FacebookRightColumn').show().siblings('.formats').hide();
			
			$('#hch').html('('+FacebookRightColumn_headlinechar+')');
			$('#mainttl').attr('maxlength', FacebookRightColumn_headlinechar).removeClass('dis').prop('disabled', false);
			
			$('#mtch').html('('+FacebookRightColumn_mtextchar+')');
			$('#maintxt').attr('maxlength', FacebookRightColumn_mtextchar);
			
			$('#imagsrc').removeClass('dis').prop('disabled', false);
			
			$('#ldch').html('('+FacebookRightColumn_linkdescchar+')');
			$('#lnkdsc').attr('maxlength', FacebookRightColumn_linkdescchar).removeClass('dis').prop('disabled', false);
			
			if ( $('#mainttl').val().length > FacebookRightColumn_headlinechar ) {
				$('#mainttl').addClass('toomuch');
				$('#submit').addClass('disabled').attr('disabled');
			} 
			if ( $('#mainttl').val().length <= FacebookRightColumn_headlinechar ) {
				$('#mainttl').removeClass('toomuch');
				$('#submit').removeClass('disabled').removeAttr('disabled');
			} 
			if ( $('#maintxt').val().length > FacebookRightColumn_mtextchar ) {
				$('#maintxt').addClass('toomuch');
				$('#submit').addClass('disabled').attr('disabled');
			}
			if ( $('#maintxt').val().length <= FacebookRightColumn_mtextchar ) {
				$('#maintxt').removeClass('toomuch');
				$('#submit').removeClass('disabled').removeAttr('disabled');
			} 
			if ( $('#lnkdsc').val().length > FacebookRightColumn_linkdescchar ) {
				$('#lnkdsc').addClass('toomuch');
				$('#submit').addClass('disabled').attr('disabled');
			} 
			if ( $('#lnkdsc').val().length <= FacebookRightColumn_linkdescchar ) {
				$('#lnkdsc').removeClass('toomuch');
				$('#submit').removeClass('disabled').removeAttr('disabled');
			} 
			$('#prevBtn').click();
		}
	}
	function fbia() {
		if ($('#select_format').val() == 'facebookinstantarticles') {
			$('#FacebookInstantArticles').show().siblings('.formats').hide();
			
			$('#hch').html('('+FacebookInstantArticles_headlinechar+')');
			$('#mainttl').attr('maxlength', FacebookInstantArticles_headlinechar).removeClass('dis').prop('disabled', false);;
			
			$('#mtch').html('('+FacebookInstantArticles_mtextchar+')');
			$('#maintxt').attr('maxlength', FacebookInstantArticles_mtextchar);
			
			$('#imagsrc').removeClass('dis').prop('disabled', false);
			
			$('#ldch').html('('+FacebookInstantArticles_linkdescchar+')');
			$('#lnkdsc').attr('maxlength', FacebookInstantArticles_linkdescchar).removeClass('dis').prop('disabled', false);;
			
			if ( $('#mainttl').val().length > FacebookInstantArticles_headlinechar ) {
				$('#mainttl').addClass('toomuch');
				$('#submit').addClass('disabled').attr('disabled');
			} 
			if ( $('#mainttl').val().length <= FacebookInstantArticles_headlinechar ) {
				$('#mainttl').removeClass('toomuch');
				$('#submit').removeClass('disabled').removeAttr('disabled');
			} 
			
			if ( $('#maintxt').val().length > FacebookInstantArticles_mtextchar ) {
				$('#maintxt').addClass('toomuch');
				$('#submit').addClass('disabled').attr('disabled');
			}
			if ( $('#maintxt').val().length <= FacebookInstantArticles_mtextchar ) {
				$('#maintxt').removeClass('toomuch');
				$('#submit').removeClass('disabled').removeAttr('disabled');
			} 
			
			if ( $('#lnkdsc').val().length > FacebookInstantArticles_linkdescchar ) {
				$('#lnkdsc').addClass('toomuch');
				$('#submit').addClass('disabled').attr('disabled');
			} 
			if ( $('#lnkdsc').val().length <= FacebookInstantArticles_linkdescchar ) {
				$('#lnkdsc').removeClass('toomuch');
				$('#submit').removeClass('disabled').removeAttr('disabled');
			} 
			$('#prevBtn').click();
		}
	}
	function ann() {
		if ($('#select_format').val() == 'audiencenetworknative') {
			$('#AudienceNetworkNative').show().siblings('.formats').hide();
			
			$('#hch').html('('+AudienceNetworkNative_headlinechar+')');
			$('#mainttl').attr('maxlength', AudienceNetworkNative_headlinechar).removeClass('dis').prop('disabled', false);;
			
			$('#mtch').html('('+AudienceNetworkNative_mtextchar+')');
			$('#maintxt').attr('maxlength', AudienceNetworkNative_mtextchar);
			
			$('#imagsrc').removeClass('dis').prop('disabled', false);
			
			$('#ldch').html('('+AudienceNetworkNative_linkdescchar+')');
			$('#lnkdsc').attr('maxlength', AudienceNetworkNative_linkdescchar).removeClass('dis').prop('disabled', false);;
			
			if ( $('#mainttl').val().length > AudienceNetworkNative_headlinechar ) {
				$('#mainttl').addClass('toomuch');
				$('#submit').addClass('disabled').attr('disabled');
			} 
			if ( $('#mainttl').val().length <= AudienceNetworkNative_headlinechar ) {
				$('#mainttl').removeClass('toomuch');
				$('#submit').removeClass('disabled').removeAttr('disabled');
			} 
			
			if ( $('#maintxt').val().length > AudienceNetworkNative_mtextchar ) {
				$('#maintxt').addClass('toomuch');
				$('#submit').addClass('disabled').attr('disabled');
			}
			if ( $('#maintxt').val().length <= AudienceNetworkNative_mtextchar ) {
				$('#maintxt').removeClass('toomuch');
				$('#submit').removeClass('disabled').removeAttr('disabled');
			} 
			
			if ( $('#lnkdsc').val().length > AudienceNetworkNative_linkdescchar ) {
				$('#lnkdsc').addClass('toomuch');
				$('#submit').addClass('disabled').attr('disabled');
			} 
			if ( $('#lnkdsc').val().length <= AudienceNetworkNative_linkdescchar ) {
				$('#lnkdsc').removeClass('toomuch');
				$('#submit').removeClass('disabled').removeAttr('disabled');
			} 
			$('#prevBtn').click();
		}
	}
	
	setTimeout(function(){
		inputDisabled();
		fbfeed();
		fbrc();
		fbia();
		ann();
	},200);

	
	$('#select_format').on('change', function() {
		
		$('#prevBtn').click();
		inputDisabled();
		fbfeed();
		fbrc();
		fbia();
		ann();
		
	});
	
	
	// Form preview
	$('#prevBtn').on('click', function(e){
		var mainttl 	= $('#mainttl').val();
		var maintxt 	= $('#maintxt').val();
		var lnkdsc 		= $('#lnkdsc').val();
		var imagsrc 	= $('#imagsrc').val();
		$( '.headline' ).html( '' ).append( mainttl );
		$( '.mtext' ).html( '' ).append( maintxt );
		$( '.linkdesc' ).html( '' ).append( lnkdsc );
		$( '.img' ).attr( 'src', imagsrc );
		
	});
	
	// Form complete in real time
	$('#mainttl').on("change", function(){
		var mainttl 	= $('#mainttl').val();
		$( '.headline' ).html( mainttl );
		if ( $('#mainttl').val().length <= $('#mainttl').attr('maxlength') ) {
			$('#mainttl').removeClass('toomuch');
		}
		btnsave();
	});
	$('#maintxt').on("change", function(){
		var maintxt 	= $('#maintxt').val();
		$( '.mtext' ).html( '' ).append( maintxt );
		if ( $('#maintxt').val().length <= $('#maintxt').attr('maxlength') ) {
			$('#maintxt').removeClass('toomuch');
		}
		btnsave();
	});
	$('#lnkdsc').on("change", function(){
		var lnkdsc 	= $('#lnkdsc').val();
		$( '.linkdesc' ).html( '' ).append( lnkdsc );
		if ( $('#lnkdsc').val().length <= $('#lnkdsc').attr('maxlength') ) {
			$('#lnkdsc').removeClass('toomuch');
			
		}
		btnsave();
	});
	$('#imagsrc').on("change", function(){
		var imagsrc 	= $('#imagsrc').val();
		$( '.img' ).attr( 'src', imagsrc );
	});
	
	
	// Table edits
	$('.aedit').on('click', function(e) {
		e.preventDefault();
		if ( $(this).hasClass('openf') ) {
			$(this).html('<i class="fas fa-ban"></i>').removeClass('openf').addClass('closef').parent().parent().find('form').show(100);
		} else if ( $(this).hasClass('closef') ) {
			$(this).html('<i class="fas fa-edit"></i>').removeClass('closef').addClass('openf').parent().parent().find('form').hide(100);
		}
	});
	
});
























