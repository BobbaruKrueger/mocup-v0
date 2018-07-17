// Define Class
class Image {
	constructor(tip, nume, mtext, mtextchar, headline, headlinechar, linkdesc, linkdescchar, value, img, clasa) {
		this.tip 			= tip;
		this.nume 			= nume;
		this.mtext 			= mtext;
		this.mtextchar		= mtextchar;
		this.headline		= headline;
		this.headlinechar	= headlinechar;
		this.linkdesc		= linkdesc;
		this.linkdescchar	= linkdescchar;
		this.value			= value;
		this.img			= img;
		this.clasa			= clasa;
	}
}

// Create variables with each element/format
var main_text 							= 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed nisi.';
var main_headline		 				= 'Mauris massa Vestibulum';
var main_linkdesc		 				= 'Quisque cursus, metus vitae';
var main_img			 				= 'http://via.placeholder.com/400x150';
		
var FacebookFeed_nume 					= 'Facebook Feed';
var FacebookFeed_mtextchar				= 125;
var FacebookFeed_headlinechar			= 25;
var FacebookFeed_linkdescchar			= 30;
var FacebookFeed_value	 				= 'facebookfeed';
var FacebookFeed_class	 				= 'FacebookFeed';
const FacebookFeed 						= new Image( 'image', FacebookFeed_nume, main_text, FacebookFeed_mtextchar, main_headline, FacebookFeed_headlinechar, main_linkdesc, FacebookFeed_linkdescchar, FacebookFeed_value, main_img, FacebookFeed_class );

var FacebookRightColumn_nume 			= 'Facebook Right Column';
//var FacebookRightColumn_mtextchar		= 125;
var FacebookRightColumn_mtextchar		= 126;
//var FacebookRightColumn_headlinechar	= 25;
var FacebookRightColumn_headlinechar	= 26;
//var FacebookRightColumn_linkdescchar	= 30;
var FacebookRightColumn_linkdescchar	= 31;
var FacebookRightColumn_value	 		= 'facebookrightcolumn';
var FacebookRightColumn_class	 		= 'FacebookRightColumn';
const FacebookRightColumn 				= new Image( 'image', FacebookRightColumn_nume, main_text, FacebookRightColumn_mtextchar, main_headline, FacebookRightColumn_headlinechar, main_linkdesc, FacebookRightColumn_linkdescchar, FacebookRightColumn_value, main_img, FacebookRightColumn_class );

var FacebookInstantArticles_nume 		= 'Facebook Instant Articles';
var FacebookInstantArticles_value	 	= 'facebookinstantarticles';
//var FacebookInstantArticles_mtextchar	= 125;
var FacebookInstantArticles_mtextchar	= 127;
//var FacebookInstantArticles_headlinechar= 25;
var FacebookInstantArticles_headlinechar= 27;
//var FacebookInstantArticles_linkdescchar= 30;
var FacebookInstantArticles_linkdescchar= 32;
var FacebookInstantArticles_class	 	= 'FacebookInstantArticles';
const FacebookInstantArticles 			= new Image( 'image', FacebookInstantArticles_nume, main_text, FacebookInstantArticles_mtextchar, main_headline, FacebookInstantArticles_headlinechar, main_linkdesc, FacebookInstantArticles_linkdescchar, FacebookInstantArticles_value, main_img, FacebookInstantArticles_class );

var AudienceNetworkNative_nume 			= 'Audience Network Native';
var AudienceNetworkNative_value	 		= 'audiencenetworknative';
//var AudienceNetworkNative_mtextchar		= 125;
var AudienceNetworkNative_mtextchar		= 128;
//var AudienceNetworkNative_headlinechar	= 25;
var AudienceNetworkNative_headlinechar	= 28;
//var AudienceNetworkNative_linkdescchar	= 30;
var AudienceNetworkNative_linkdescchar	= 33;
var AudienceNetworkNative_class	 		= 'AudienceNetworkNative';
const AudienceNetworkNative 			= new Image( 'image', AudienceNetworkNative_nume, main_text, AudienceNetworkNative_mtextchar, main_headline, AudienceNetworkNative_headlinechar, main_linkdesc, AudienceNetworkNative_linkdescchar, AudienceNetworkNative_value, main_img, AudienceNetworkNative_class );

// Add'em to an array
const selectArray = [ 
	FacebookFeed, 
	FacebookRightColumn, 
	FacebookInstantArticles,
	AudienceNetworkNative
];

// Print'em via for loop
var text = '<option value="0"> -- Select -- </option>';
for (var i = 0; i < selectArray.length; i++) {
	var selected = ( selectArray[i].value == selectVar ? 'selected' : '' );
//    text += '<option value="' + selectArray[i].value + '" class="' + selectArray[i].clasa + '">' + selectArray[i].tip.replace(/\b\w/g, function(l){ return l.toUpperCase() }) + ' - ' + selectArray[i].nume + '</option>';
	text += '<option ' + selected + ' value="' + selectArray[i].value + '" class="' + selectArray[i].clasa + '">' + selectArray[i].nume + '</option>';
	
	
	document.getElementsByClassName("mtext")[0].innerHTML = selectArray[i].mtext;
	//document.getElementById("img").classList.add(selectArray[i].img); // add class
	document.getElementsByClassName("img")[0].src = selectArray[i].img;
	document.getElementsByClassName("headline")[0].innerHTML = selectArray[i].headline;
	document.getElementsByClassName("linkdesc")[0].innerHTML = selectArray[i].linkdesc;	
	
}
document.getElementById("select_format").innerHTML = text;
console.log(selectArray);

//jQuery(document).ready(function ($) {
//	
//	$('#mainttl').attr('value', main_headline);
//	$('#maintxt').attr('value', main_text);
//	$('#lnkdsc').attr('value', main_linkdesc);
//	$('#imagsrc').attr('value', main_img);
//	
//});