jQuery(document).ready(function ($) {
	
	
	
	$('#select_format').on('change', function() {
		// $(this).find(':selected').addClass('selected').siblings('option').removeClass('selected');
		
		$('#prevBtn').click();
		
		var that = $(this).find(':selected');
		
		// 1 = Image
		if (that.val() == '1-1') {
			$('#FacebookFeed').show().siblings('.formats').hide();
			
			$('#hch').html('('+FacebookFeed_headlinechar+')');			
			$('#mainttl').attr('maxlength', FacebookFeed_headlinechar);
			
			$('#mtch').html('('+FacebookFeed_mtextchar+')');
			$('#maintxt').attr('maxlength', FacebookFeed_mtextchar);
			
			$('#ldch').html('('+FacebookFeed_linkdescchar+')');
			$('#lnkdsc').attr('maxlength', FacebookFeed_linkdescchar);
		}
		if (that.val() == '1-2') {
			$('#FacebookRightColumn').show().siblings('.formats').hide();
			
			$('#hch').html('('+FacebookRightColumn_headlinechar+')');
			$('#mainttl').attr('maxlength', FacebookRightColumn_headlinechar);
			
			$('#mtch').html('('+FacebookRightColumn_mtextchar+')');
			$('#maintxt').attr('maxlength', FacebookRightColumn_mtextchar);
			
			$('#ldch').html('('+FacebookRightColumn_linkdescchar+')');
			$('#lnkdsc').attr('maxlength', FacebookRightColumn_linkdescchar);
		}
		if (that.val() == '1-3') {
			$('#FacebookInstantArticles').show().siblings('.formats').hide();
			
			$('#hch').html('('+FacebookInstantArticles_headlinechar+')');
			$('#mainttl').attr('maxlength', FacebookInstantArticles_headlinechar);
			
			$('#mtch').html('('+FacebookInstantArticles_mtextchar+')');
			$('#maintxt').attr('maxlength', FacebookInstantArticles_mtextchar);
			
			$('#ldch').html('('+FacebookInstantArticles_linkdescchar+')');
			$('#lnkdsc').attr('maxlength', FacebookInstantArticles_linkdescchar);
		}
		if (that.val() == '1-4') {
			$('#AudienceNetworkNative').show().siblings('.formats').hide();
			
			$('#hch').html('('+AudienceNetworkNative_headlinechar+')');
			$('#mainttl').attr('maxlength', AudienceNetworkNative_headlinechar);
			
			$('#mtch').html('('+AudienceNetworkNative_mtextchar+')');
			$('#maintxt').attr('maxlength', AudienceNetworkNative_mtextchar);
			
			$('#ldch').html('('+AudienceNetworkNative_linkdescchar+')');
			$('#lnkdsc').attr('maxlength', AudienceNetworkNative_linkdescchar);
		}
		
		
	});
	
	
	// Form preview
	
	
	$('#prevBtn').on('click', function(e){
		var mainttl 	= $('#mainttl').val();
		var maintxt 	= $('#maintxt').val();
		var lnkdsc 		= $('#lnkdsc').val();
		var imagsrc 	= $('#imagsrc').val();
		$( '.headline' ).html( mainttl );
		$( '.mtext' ).html( '' ).append( maintxt );
		$( '.linkdesc' ).html( '' ).append( lnkdsc );
		$( '.img' ).attr( 'src', imagsrc );
		
	});
	
	// Form complete in real time
	$('#mainttl').on("change", function(){
		var mainttl 	= $('#mainttl').val();
		$( '.headline' ).html( mainttl );
	});
	$('#maintxt').on("change", function(){
		var maintxt 	= $('#maintxt').val();
		$( '.mtext' ).html( '' ).append( maintxt );
	});
	$('#lnkdsc').on("change", function(){
		var lnkdsc 	= $('#lnkdsc').val();
		$( '.linkdesc' ).html( '' ).append( lnkdsc );
	});
	$('#imagsrc').on("change", function(){
		var imagsrc 	= $('#imagsrc').val();
		$( '.img' ).attr( 'src', imagsrc );
	});
	
});
























