<?php
defined( 'ABSPATH' ) or die( 'Please don&rsquo;t call the plugin directly. Thanks :)' );

//XML/HTML Sitemap
//=================================================================================================
//HTML Sitemap Enable
function seopress_xml_sitemap_html_enable_option() {
	$seopress_xml_sitemap_html_enable_option = get_option("seopress_xml_sitemap_option_name");
	if ( ! empty ( $seopress_xml_sitemap_html_enable_option ) ) {
		foreach ($seopress_xml_sitemap_html_enable_option as $key => $seopress_xml_sitemap_html_enable_value)
			$options[$key] = $seopress_xml_sitemap_html_enable_value;
		 if (isset($seopress_xml_sitemap_html_enable_option['seopress_xml_sitemap_html_enable'])) { 
		 	return $seopress_xml_sitemap_html_enable_option['seopress_xml_sitemap_html_enable'];
		 }
	}
}

//HTML Sitemap mapping
function seopress_xml_sitemap_html_mapping_option() {
	$seopress_xml_sitemap_html_mapping_option = get_option("seopress_xml_sitemap_option_name");
	if ( ! empty ( $seopress_xml_sitemap_html_mapping_option ) ) {
		foreach ($seopress_xml_sitemap_html_mapping_option as $key => $seopress_xml_sitemap_html_mapping_value)
			$options[$key] = $seopress_xml_sitemap_html_mapping_value;
		 if (isset($seopress_xml_sitemap_html_mapping_option['seopress_xml_sitemap_html_mapping'])) { 
		 	return $seopress_xml_sitemap_html_mapping_option['seopress_xml_sitemap_html_mapping'];
		 }
	}
}

//HTML Sitemap Exclude
function seopress_xml_sitemap_html_exclude_option() {
	$seopress_xml_sitemap_html_exclude_option = get_option("seopress_xml_sitemap_option_name");
	if ( ! empty ( $seopress_xml_sitemap_html_exclude_option ) ) {
		foreach ($seopress_xml_sitemap_html_exclude_option as $key => $seopress_xml_sitemap_html_exclude_value)
			$options[$key] = $seopress_xml_sitemap_html_exclude_value;
		 if (isset($seopress_xml_sitemap_html_exclude_option['seopress_xml_sitemap_html_exclude'])) { 
		 	return $seopress_xml_sitemap_html_exclude_option['seopress_xml_sitemap_html_exclude'];
		 }
	}
}

//HTML Sitemap Date
function seopress_xml_sitemap_html_date_option() {
	$seopress_xml_sitemap_html_date_option = get_option("seopress_xml_sitemap_option_name");
	if ( ! empty ( $seopress_xml_sitemap_html_date_option ) ) {
		foreach ($seopress_xml_sitemap_html_date_option as $key => $seopress_xml_sitemap_html_date_value)
			$options[$key] = $seopress_xml_sitemap_html_date_value;
		 if (isset($seopress_xml_sitemap_html_date_option['seopress_xml_sitemap_html_date'])) { 
		 	return $seopress_xml_sitemap_html_date_option['seopress_xml_sitemap_html_date'];
		 }
	}
}

if (seopress_xml_sitemap_html_enable_option() =='1') {
	function seopress_xml_sitemap_html_display() {
		if (seopress_xml_sitemap_html_mapping_option() !='') {
			if(is_page(explode(',', seopress_xml_sitemap_html_mapping_option()))) {	
				add_filter('the_content', 'seopress_xml_sitemap_html_hook');
			}
		}
		function seopress_xml_sitemap_html_hook($content) {
				if (seopress_xml_sitemap_html_exclude_option() !='') {
					$seopress_xml_sitemap_html_exclude_option = seopress_xml_sitemap_html_exclude_option();
				} else {
					$seopress_xml_sitemap_html_exclude_option = '';
				}
				//CPT
				if (seopress_xml_sitemap_post_types_list_option() !='') {
					$content .= '<div class="wrap-html-sitemap">';
					foreach (seopress_xml_sitemap_post_types_list_option() as $cpt_key => $cpt_value) {
						$obj = get_post_type_object( $cpt_key );
						$content .= '<h2>'.$obj->labels->singular_name.'</h2>';
						foreach ($cpt_value as $_cpt_key => $_cpt_value) {
							if($_cpt_value =='1') {
								$args = array( 'posts_per_page' => 1000, 'order'=> 'DESC', 'orderby' => 'date', 'post_type' => $cpt_key, 'post_status' => 'publish', 'meta_key' => '_seopress_robots_index', 'meta_value' => 'yes', 'meta_compare' => 'NOT EXISTS', 'fields' => 'ids', 'exclude' => $seopress_xml_sitemap_html_exclude_option );
								if ($cpt_key =='post') {
									$cats = get_categories('orderby=name&order=ASC');
									if (!empty($cats)) {
										foreach($cats as $cat) {
											$content .= '<h3>'.$cat->name.'</h3>';
											unset($args['cat']);
											$args['cat'][] = $cat->term_id;
											require(dirname( __FILE__ ) . '/sitemap/template-html-sitemap.php');
										}
									}
								} else {
									require(dirname( __FILE__ ) . '/sitemap/template-html-sitemap.php');
								}
							}
							
						}
					}
					$content .= '</div>';
				}
			    
			    return $content;
			}
	}
	add_action('wp_head', 'seopress_xml_sitemap_html_display');

	add_shortcode( 'seopress_html_sitemap', 'seopress_xml_sitemap_html_hook' );
}
