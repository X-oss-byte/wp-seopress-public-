jQuery(document).ready(function($) {
	if(typeof sessionStorage!='undefined') {
		var seopress_tab_session_storage = sessionStorage.getItem("seopress_titles_tab");
		if (seopress_tab_session_storage) {
			jQuery('#seopress-tabs').find('.nav-tab.nav-tab-active').removeClass("nav-tab-active");
			jQuery('#seopress-tabs').find('.seopress-tab.active').removeClass("active");
			
	    	jQuery('#'+seopress_tab_session_storage+'-tab').addClass("nav-tab-active");
	    	jQuery('#'+seopress_tab_session_storage).addClass("active");
	    } else {
	    	//Default TAB
	    	jQuery('#tab_seopress_titles_home-tab').addClass("nav-tab-active");
	    	jQuery('#tab_seopress_titles_home').addClass("active");
	    }
	};
    jQuery("#seopress-tabs").find("a.nav-tab").click(function(e){
    	e.preventDefault();
    	var hash = jQuery(this).attr('href').split('#tab=')[1];

    	jQuery('#seopress-tabs').find('.nav-tab.nav-tab-active').removeClass("nav-tab-active");
    	jQuery('#'+hash+'-tab').addClass("nav-tab-active");
    	

		sessionStorage.setItem("seopress_titles_tab", hash);
    	
    	jQuery('#seopress-tabs').find('.seopress-tab.active').removeClass("active");
    	jQuery('#'+hash).addClass("active");
    });
});