<?php
defined( 'ABSPATH' ) or die( 'Please don&rsquo;t call the plugin directly. Thanks :)' );

//Google Analytics
//=================================================================================================
//Remarketing
function seopress_google_analytics_remarketing_option() {
	$seopress_google_analytics_remarketing_option = get_option("seopress_google_analytics_option_name");
	if ( ! empty ( $seopress_google_analytics_remarketing_option ) ) {
		foreach ($seopress_google_analytics_remarketing_option as $key => $seopress_google_analytics_remarketing_value)
			$options[$key] = $seopress_google_analytics_remarketing_value;
			if (isset($seopress_google_analytics_remarketing_option['seopress_google_analytics_remarketing'])) {
				return $seopress_google_analytics_remarketing_option['seopress_google_analytics_remarketing'];
			}
	}
}

//IP Anonymization
function seopress_google_analytics_ip_anonymization_option() {
	$seopress_google_analytics_ip_anonymization_option = get_option("seopress_google_analytics_option_name");
	if ( ! empty ( $seopress_google_analytics_ip_anonymization_option ) ) {
		foreach ($seopress_google_analytics_ip_anonymization_option as $key => $seopress_google_analytics_ip_anonymization_value)
			$options[$key] = $seopress_google_analytics_ip_anonymization_value;
			if (isset($seopress_google_analytics_ip_anonymization_option['seopress_google_analytics_ip_anonymization'])) {
				return $seopress_google_analytics_ip_anonymization_option['seopress_google_analytics_ip_anonymization'];
			}
	}
}

//Link attribution
function seopress_google_analytics_link_attribution_option() {
	$seopress_google_analytics_link_attribution_option = get_option("seopress_google_analytics_option_name");
	if ( ! empty ( $seopress_google_analytics_link_attribution_option ) ) {
		foreach ($seopress_google_analytics_link_attribution_option as $key => $seopress_google_analytics_link_attribution_value)
			$options[$key] = $seopress_google_analytics_link_attribution_value;
			if (isset($seopress_google_analytics_link_attribution_option['seopress_google_analytics_link_attribution'])) {
				return $seopress_google_analytics_link_attribution_option['seopress_google_analytics_link_attribution'];
			}
	}
}

//Cross Domain Enable
function seopress_google_analytics_cross_enable_option() {
	$seopress_google_analytics_cross_enable_option = get_option("seopress_google_analytics_option_name");
	if ( ! empty ( $seopress_google_analytics_cross_enable_option ) ) {
		foreach ($seopress_google_analytics_cross_enable_option as $key => $seopress_google_analytics_cross_enable_value)
			$options[$key] = $seopress_google_analytics_cross_enable_value;
			if (isset($seopress_google_analytics_cross_enable_option['seopress_google_analytics_cross_enable'])) {
				return $seopress_google_analytics_cross_enable_option['seopress_google_analytics_cross_enable'];
			}
	}
}

//Cross Domain
function seopress_google_analytics_cross_domain_option() {
	$seopress_google_analytics_cross_domain_option = get_option("seopress_google_analytics_option_name");
	if ( ! empty ( $seopress_google_analytics_cross_domain_option ) ) {
		foreach ($seopress_google_analytics_cross_domain_option as $key => $seopress_google_analytics_cross_domain_value)
			$options[$key] = $seopress_google_analytics_cross_domain_value;
			if (isset($seopress_google_analytics_cross_domain_option['seopress_google_analytics_cross_domain'])) {
				return $seopress_google_analytics_cross_domain_option['seopress_google_analytics_cross_domain'];
			}
	}
}

//Events external links tracking Enable
function seopress_google_analytics_link_tracking_enable_option() {
	$seopress_google_analytics_link_tracking_enable_option = get_option("seopress_google_analytics_option_name");
	if ( ! empty ( $seopress_google_analytics_link_tracking_enable_option ) ) {
		foreach ($seopress_google_analytics_link_tracking_enable_option as $key => $seopress_google_analytics_link_tracking_enable_value)
			$options[$key] = $seopress_google_analytics_link_tracking_enable_value;
			if (isset($seopress_google_analytics_link_tracking_enable_option['seopress_google_analytics_link_tracking_enable'])) {
				return $seopress_google_analytics_link_tracking_enable_option['seopress_google_analytics_link_tracking_enable'];
			}
	}
}

//Events downloads tracking Enable
function seopress_google_analytics_download_tracking_enable_option() {
	$seopress_google_analytics_download_tracking_enable_option = get_option("seopress_google_analytics_option_name");
	if ( ! empty ( $seopress_google_analytics_download_tracking_enable_option ) ) {
		foreach ($seopress_google_analytics_download_tracking_enable_option as $key => $seopress_google_analytics_download_tracking_enable_value)
			$options[$key] = $seopress_google_analytics_download_tracking_enable_value;
			if (isset($seopress_google_analytics_download_tracking_enable_option['seopress_google_analytics_download_tracking_enable'])) {
				return $seopress_google_analytics_download_tracking_enable_option['seopress_google_analytics_download_tracking_enable'];
			}
	}
}

//Events tracking file types
function seopress_google_analytics_download_tracking_option() {
	$seopress_google_analytics_download_tracking_option = get_option("seopress_google_analytics_option_name");
	if ( ! empty ( $seopress_google_analytics_download_tracking_option ) ) {
		foreach ($seopress_google_analytics_download_tracking_option as $key => $seopress_google_analytics_download_tracking_value)
			$options[$key] = $seopress_google_analytics_download_tracking_value;
			if (isset($seopress_google_analytics_download_tracking_option['seopress_google_analytics_download_tracking'])) {
				return $seopress_google_analytics_download_tracking_option['seopress_google_analytics_download_tracking'];
			}
	}
}

//Events affiliate links tracking Enable
function seopress_google_analytics_affiliate_tracking_enable_option() {
	$seopress_google_analytics_affiliate_tracking_enable_option = get_option("seopress_google_analytics_option_name");
	if ( ! empty ( $seopress_google_analytics_affiliate_tracking_enable_option ) ) {
		foreach ($seopress_google_analytics_affiliate_tracking_enable_option as $key => $seopress_google_analytics_affiliate_tracking_enable_value)
			$options[$key] = $seopress_google_analytics_affiliate_tracking_enable_value;
			if (isset($seopress_google_analytics_affiliate_tracking_enable_option['seopress_google_analytics_affiliate_tracking_enable'])) {
				return $seopress_google_analytics_affiliate_tracking_enable_option['seopress_google_analytics_affiliate_tracking_enable'];
			}
	}
}

//Events tracking affiliate match
function seopress_google_analytics_affiliate_tracking_option() {
	$seopress_google_analytics_affiliate_tracking_option = get_option("seopress_google_analytics_option_name");
	if ( ! empty ( $seopress_google_analytics_affiliate_tracking_option ) ) {
		foreach ($seopress_google_analytics_affiliate_tracking_option as $key => $seopress_google_analytics_affiliate_tracking_value)
			$options[$key] = $seopress_google_analytics_affiliate_tracking_value;
			if (isset($seopress_google_analytics_affiliate_tracking_option['seopress_google_analytics_affiliate_tracking'])) {
				return $seopress_google_analytics_affiliate_tracking_option['seopress_google_analytics_affiliate_tracking'];
			}
	}
}

//Custom Dimension Author
function seopress_google_analytics_cd_author_option() {
	$seopress_google_analytics_cd_author_option = get_option("seopress_google_analytics_option_name");
	if ( ! empty ( $seopress_google_analytics_cd_author_option ) ) {
		foreach ($seopress_google_analytics_cd_author_option as $key => $seopress_google_analytics_cd_author_value)
			$options[$key] = $seopress_google_analytics_cd_author_value;
			if (isset($seopress_google_analytics_cd_author_option['seopress_google_analytics_cd_author'])) {
				return $seopress_google_analytics_cd_author_option['seopress_google_analytics_cd_author'];
			}
	}
}

//Custom Dimension Category
function seopress_google_analytics_cd_category_option() {
	$seopress_google_analytics_cd_category_option = get_option("seopress_google_analytics_option_name");
	if ( ! empty ( $seopress_google_analytics_cd_category_option ) ) {
		foreach ($seopress_google_analytics_cd_category_option as $key => $seopress_google_analytics_cd_category_value)
			$options[$key] = $seopress_google_analytics_cd_category_value;
			if (isset($seopress_google_analytics_cd_category_option['seopress_google_analytics_cd_category'])) {
				return $seopress_google_analytics_cd_category_option['seopress_google_analytics_cd_category'];
			}
	}
}

//Custom Dimension Tag
function seopress_google_analytics_cd_tag_option() {
	$seopress_google_analytics_cd_tag_option = get_option("seopress_google_analytics_option_name");
	if ( ! empty ( $seopress_google_analytics_cd_tag_option ) ) {
		foreach ($seopress_google_analytics_cd_tag_option as $key => $seopress_google_analytics_cd_tag_value)
			$options[$key] = $seopress_google_analytics_cd_tag_value;
			if (isset($seopress_google_analytics_cd_tag_option['seopress_google_analytics_cd_tag'])) {
				return $seopress_google_analytics_cd_tag_option['seopress_google_analytics_cd_tag'];
			}
	}
}

//Custom Dimension Post Type
function seopress_google_analytics_cd_post_type_option() {
	$seopress_google_analytics_cd_post_type_option = get_option("seopress_google_analytics_option_name");
	if ( ! empty ( $seopress_google_analytics_cd_post_type_option ) ) {
		foreach ($seopress_google_analytics_cd_post_type_option as $key => $seopress_google_analytics_cd_post_type_value)
			$options[$key] = $seopress_google_analytics_cd_post_type_value;
			if (isset($seopress_google_analytics_cd_post_type_option['seopress_google_analytics_cd_post_type'])) {
				return $seopress_google_analytics_cd_post_type_option['seopress_google_analytics_cd_post_type'];
			}
	}
}

//Custom Dimension Logged In
function seopress_google_analytics_cd_logged_in_user_option() {
	$seopress_google_analytics_cd_logged_in_user_option = get_option("seopress_google_analytics_option_name");
	if ( ! empty ( $seopress_google_analytics_cd_logged_in_user_option ) ) {
		foreach ($seopress_google_analytics_cd_logged_in_user_option as $key => $seopress_google_analytics_cd_logged_in_user_value)
			$options[$key] = $seopress_google_analytics_cd_logged_in_user_value;
			if (isset($seopress_google_analytics_cd_logged_in_user_option['seopress_google_analytics_cd_logged_in_user'])) {
				return $seopress_google_analytics_cd_logged_in_user_option['seopress_google_analytics_cd_logged_in_user'];
			}
	}
}

//Build Custom GA
function seopress_google_analytics_js() {
	if (seopress_google_analytics_ua_option() !='') {
		//Init
		$seopress_google_analytics_config = array();
		$seopress_google_analytics_event = array();
		
		$seopress_google_analytics_html = "\n";
		$seopress_google_analytics_html .=
		"<script async src='https://www.googletagmanager.com/gtag/js?id=".seopress_google_analytics_ua_option()."'></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());\n";
		
		//Cross domains
		if (seopress_google_analytics_cross_enable_option() =='1' && seopress_google_analytics_cross_domain_option()) {
			$seopress_google_analytics_config['linker'] = "'linker': {'domains': ['".seopress_google_analytics_cross_domain_option()."']},";
			$seopress_google_analytics_config['linker'] = apply_filters('seopress_gtag_linker', $seopress_google_analytics_config['linker']);
		}
		
		//Remarketing
		if (seopress_google_analytics_remarketing_option() !='1') {
			$seopress_google_analytics_config['allow_display_features'] = "'allow_display_features': false,";
			$seopress_google_analytics_config['allow_display_features'] = apply_filters('seopress_gtag_allow_display_features', $seopress_google_analytics_config['allow_display_features']);
		}
		
		//Link attribution
		if (seopress_google_analytics_link_attribution_option() =='1') {
			$seopress_google_analytics_config['link_attribution'] = "'link_attribution': true,";
			$seopress_google_analytics_config['link_attribution'] = apply_filters('seopress_gtag_link_attribution', $seopress_google_analytics_config['link_attribution']);
		}
		
		//Dimensions		
		$seopress_google_analytics_config['cd']['cd_hook'] = apply_filters('seopress_gtag_cd_hook_cf', isset($seopress_google_analytics_config['cd']['cd_hook']));
		if (!has_filter('seopress_gtag_cd_hook_cf')) {
			unset($seopress_google_analytics_config['cd']['cd_hook']);
		}
		
		$seopress_google_analytics_event['cd_hook'] = apply_filters('seopress_gtag_cd_hook_ev', isset($seopress_google_analytics_event['cd_hook']));
		if (!has_filter('seopress_gtag_cd_hook_ev')) {
			unset($seopress_google_analytics_config['cd']['cd_hook']);
		}
		
		if ((seopress_google_analytics_cd_author_option() !='' && seopress_google_analytics_cd_author_option() !='none')
				|| (seopress_google_analytics_cd_category_option() !='' && seopress_google_analytics_cd_category_option() !='none')
				|| (seopress_google_analytics_cd_tag_option() !='' && seopress_google_analytics_cd_tag_option() !='none')
				|| (seopress_google_analytics_cd_post_type_option() !='' && seopress_google_analytics_cd_post_type_option() !='none')
				|| (seopress_google_analytics_cd_logged_in_user_option() !='' && seopress_google_analytics_cd_logged_in_user_option() !='none')
				|| (isset($seopress_google_analytics_config['cd']['cd_hook']) !='' && isset($seopress_google_analytics_event['cd_hook']) !='')
			) {
			$seopress_google_analytics_config['cd']['cd_start'] = "{";
		} else {
			unset($seopress_google_analytics_config['cd']);
		}		
		
		if (seopress_google_analytics_cd_author_option() !='') {
			if (seopress_google_analytics_cd_author_option() !='none') {
				if (is_singular()) {
					$seopress_google_analytics_config['cd']['cd_author'] = "'".seopress_google_analytics_cd_author_option()."': 'cd_author',";

					$seopress_google_analytics_event['cd_author'] = "gtag('event', '".__('Authors','wp-seopress')."', {'cd_author': '".get_the_author()."'});";
					
					$seopress_google_analytics_config['cd']['cd_author'] = apply_filters('seopress_gtag_cd_author_cf', $seopress_google_analytics_config['cd']['cd_author']);
					
					$seopress_google_analytics_event['cd_author'] = apply_filters('seopress_gtag_cd_author_ev', $seopress_google_analytics_event['cd_author']);
				}
			}
		}
		if (seopress_google_analytics_cd_category_option() !='') {
			if (seopress_google_analytics_cd_category_option() !='none') {
				if (is_single() && has_category()) {
					$categories = get_the_category();
					
					if ( ! empty( $categories ) ) {
						$get_first_category = esc_html( $categories[0]->name );
					}

					$seopress_google_analytics_config['cd']['cd_categories'] = "'".seopress_google_analytics_cd_category_option()."': 'cd_categories',";

					$seopress_google_analytics_event['cd_categories'] = "gtag('event', '".__('Categories','wp-seopress')."', {'cd_categories': '".$get_first_category."'});";
					
					$seopress_google_analytics_config['cd']['cd_categories'] = apply_filters('seopress_gtag_cd_categories_cf', $seopress_google_analytics_config['cd']['cd_categories']);
					
					$seopress_google_analytics_event['cd_categories'] = apply_filters('seopress_gtag_cd_categories_ev', $seopress_google_analytics_event['cd_categories']);
				}
			}
		}
		
		if (seopress_google_analytics_cd_tag_option() !='') {
			if (seopress_google_analytics_cd_tag_option() !='none') {
				if (is_single() && has_tag()) {
					$tags = get_the_tags();
					if ( ! empty( $tags ) ) {
						$seopress_comma_count = count($tags);
						$get_tags = '';
						foreach ($tags as $key => $value) {
							$get_tags .= esc_html( $value->name );
							if ( $key < $seopress_comma_count -1){
								$get_tags .= ', ';
							}
						}
					}

					$seopress_google_analytics_config['cd']['cd_tags'] = "'".seopress_google_analytics_cd_tag_option()."': 'cd_tags',";

					$seopress_google_analytics_event['cd_tags'] = "gtag('event', '".__('Tags','wp-seopress')."', {'cd_tags': '".$get_tags."'});";
					
					$seopress_google_analytics_config['cd']['cd_tags'] = apply_filters('seopress_gtag_cd_tags_cf', $seopress_google_analytics_config['cd']['cd_tags']);
					
					$seopress_google_analytics_event['cd_tags'] = apply_filters('seopress_gtag_cd_tags_ev', $seopress_google_analytics_event['cd_tags']);
				}
			}
		}
		
		if (seopress_google_analytics_cd_post_type_option() !='') {
			if (seopress_google_analytics_cd_post_type_option() !='none') {
				if (is_single()) {
					$seopress_google_analytics_config['cd']['cd_cpt'] = "'".seopress_google_analytics_cd_post_type_option()."': 'cd_cpt',";

					$seopress_google_analytics_event['cd_cpt'] = "gtag('event', '".__('Post types','wp-seopress')."', {'cd_cpt': '".get_post_type()."'});";
					
					$seopress_google_analytics_config['cd']['cd_cpt'] = apply_filters('seopress_gtag_cd_cpt_cf', $seopress_google_analytics_config['cd']['cd_cpt']);
					
					$seopress_google_analytics_event['cd_cpt'] = apply_filters('seopress_gtag_cd_cpt_ev', $seopress_google_analytics_event['cd_cpt']);
				}
			}
		}
		
		if (seopress_google_analytics_cd_logged_in_user_option() !='') {
			if (seopress_google_analytics_cd_logged_in_user_option() !='none') {
				if (wp_get_current_user()->ID) {
					$seopress_google_analytics_config['cd']['cd_logged_in'] = "'".seopress_google_analytics_cd_logged_in_user_option()."': 'cd_logged_in',";

					$seopress_google_analytics_event['cd_logged_in'] = "gtag('event', '".__('Connected users','wp-seopress')."', {'cd_logged_in': '".wp_get_current_user()->ID."'});";
					
					$seopress_google_analytics_config['cd']['cd_logged_in'] = apply_filters('seopress_gtag_cd_logged_in_cf', $seopress_google_analytics_config['cd']['cd_logged_in']);
					
					$seopress_google_analytics_event['cd_logged_in'] = apply_filters('seopress_gtag_cd_logged_in_ev', $seopress_google_analytics_event['cd_logged_in']);
				}
			}
		}
		
		if (!empty($seopress_google_analytics_config['cd']['cd_logged_in']) ||
				!empty($seopress_google_analytics_config['cd']['cd_cpt']) ||
				!empty($seopress_google_analytics_config['cd']['cd_tags']) ||
				!empty($seopress_google_analytics_config['cd']['cd_categories']) ||
				!empty($seopress_google_analytics_config['cd']['cd_author']) ||
				(!empty($seopress_google_analytics_config['cd']['cd_hook']) && !empty($seopress_google_analytics_event['cd_hook']))) {
			$seopress_google_analytics_config['cd']['cd_end'] = "}, ";
		} 
		// else {
		// 	$seopress_google_analytics_config['cd']['cd_start'] = '';
		// }

		//External links
		if (seopress_google_analytics_link_tracking_enable_option() !='') {
			if (seopress_google_analytics_link_tracking_enable_option() !='') {
				$seopress_google_analytics_click_event['link_tracking'] =
"jQuery(document).ready(function() {
	jQuery('a[target=\"_blank\"]').click(function(e) {
		gtag('event', 'click', {'event_category': 'external links','event_label' : this.href});
	});
});
";
				$seopress_google_analytics_click_event['link_tracking'] = apply_filters('seopress_gtag_link_tracking_ev', $seopress_google_analytics_click_event['link_tracking']);
				$seopress_google_analytics_html .= $seopress_google_analytics_click_event['link_tracking'];
			}
		}
		
		//Downloads tracking
		if (seopress_google_analytics_download_tracking_enable_option() !='') {
			if (seopress_google_analytics_download_tracking_option() !='') {
				$seopress_google_analytics_click_event['download_tracking'] = 
"jQuery(document).ready(function() {
	jQuery('a').filter(function() {
		return this.href.match(/.*\.(".seopress_google_analytics_download_tracking_option().")(\?.*)?$/);
	}).click(function(e) {
		gtag('event', 'click', {'event_category': 'downloads','event_label' : this.href});
	});
});
";
				$seopress_google_analytics_click_event['download_tracking'] = apply_filters('seopress_gtag_download_tracking_ev', $seopress_google_analytics_click_event['download_tracking']);
				$seopress_google_analytics_html .= $seopress_google_analytics_click_event['download_tracking'];
			}
		}
		
		//Affiliate tracking
		if (seopress_google_analytics_affiliate_tracking_enable_option() !='') {
			if (seopress_google_analytics_affiliate_tracking_option() !='') {
				$seopress_google_analytics_click_event['outbound_tracking'] = 
"jQuery(document).ready(function() {
	jQuery('a').filter(function() {
    	return this.href.match(/(?:\/".seopress_google_analytics_affiliate_tracking_option()."\/)/gi);
    }).click(function(e) {
		gtag('event', 'click', {'event_category': 'outbound/affiliate','event_label' : this.href});
    });
});
";
				$seopress_google_analytics_click_event['outbound_tracking'] = apply_filters('seopress_gtag_outbound_tracking_ev', $seopress_google_analytics_click_event['outbound_tracking']);
				$seopress_google_analytics_html .= $seopress_google_analytics_click_event['outbound_tracking'];
			}
		}
		
		//Anonymize IP
		if (seopress_google_analytics_ip_anonymization_option() =='1') {
			$seopress_google_analytics_config['anonymize_ip'] = "'anonymize_ip': true,";
			$seopress_google_analytics_config['anonymize_ip'] = apply_filters('seopress_gtag_anonymize_ip', $seopress_google_analytics_config['anonymize_ip']);
		}		

		//Send data
		$features = '';
		if (!empty($seopress_google_analytics_config['cd']['cd_logged_in']) ||
				!empty($seopress_google_analytics_config['cd']['cd_cpt']) ||
				!empty($seopress_google_analytics_config['cd']['cd_tags']) ||
				!empty($seopress_google_analytics_config['cd']['cd_categories']) ||
				!empty($seopress_google_analytics_config['cd']['cd_author']) ||
				!empty($seopress_google_analytics_config['cd']['cd_hook'])) {
			$seopress_google_analytics_config['cd']['cd_start'] = "'custom_map': {";
		}
		if (!empty($seopress_google_analytics_config)) {
			if (!empty($seopress_google_analytics_config['cd']['cd_start'])) {
				array_unshift($seopress_google_analytics_config['cd'], $seopress_google_analytics_config['cd']['cd_start']);
				unset($seopress_google_analytics_config['cd']['cd_start']);
			}
			$features = ', {';
			foreach ($seopress_google_analytics_config as $key => $feature) {
				if ($key =='cd') {
					foreach ($feature as $_key => $cd) {
						$features .= $cd;
					}
				} else {
					$features .= $feature;
				}
			}
			$features .= '}';
		}

		$seopress_google_analytics_html .= "gtag('config', '".seopress_google_analytics_ua_option()."' ".$features.");";
		$seopress_google_analytics_html .= "\n";

		$events = '';
		if (!empty($seopress_google_analytics_event)) {
			foreach ($seopress_google_analytics_event as $event) {
				$seopress_google_analytics_html .= $event;
				$seopress_google_analytics_html .= "\n";
			}
		}
		
		$seopress_google_analytics_html .= "</script>";
		$seopress_google_analytics_html .= "\n";
		
		$seopress_google_analytics_html = apply_filters('seopress_gtag_html', $seopress_google_analytics_html);
		echo $seopress_google_analytics_html;
	}
}

if (seopress_google_analytics_enable_option() =='1' && seopress_google_analytics_ua_option() !='') {
	if (is_user_logged_in()) {
		global $wp_roles;
		
		//Get current user role
		if(isset(wp_get_current_user()->roles[0])) {
			$seopress_user_role = wp_get_current_user()->roles[0];
			//If current user role matchs values from SEOPress GA settings then apply
			if (function_exists('seopress_google_analytics_roles_option') && seopress_google_analytics_roles_option() !='') {
				if( array_key_exists( $seopress_user_role, seopress_google_analytics_roles_option())) {
					//do nothing
				} else {
					add_action( 'wp_head', 'seopress_google_analytics_js', 999 );
				}
			} else {
				add_action( 'wp_head', 'seopress_google_analytics_js', 999 );
			}
		}
	} else {
		add_action( 'wp_head', 'seopress_google_analytics_js', 999 );
	}
}
