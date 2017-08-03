<?php
defined( 'ABSPATH' ) or die( 'Please don&rsquo;t call the plugin directly. Thanks :)' );

Header('Content-type: text/xml');

function seopress_xml_sitemap_single_term() {
	$path = basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
	$seopress_sitemaps = '<?xml version="1.0" encoding="UTF-8"?>';
	$seopress_sitemaps .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
	//foreach (seopress_xml_sitemap_post_types_list_option() as $cpt_key => $cpt_value) {
	//	foreach ($cpt_value as $_cpt_key => $_cpt_value) {
	//		if($_cpt_value =='1') {
				$args = array('taxonomy' => $path,'hide_empty' => false);
				$termslist = get_terms( $args );
				foreach ( $termslist as $term ) {
				  	$seopress_sitemaps .= '<url>';
					$seopress_sitemaps .= '<loc>';
					$seopress_sitemaps .= esc_url(get_term_link($term));
					$seopress_sitemaps .= '</loc>';
					$seopress_sitemaps .= '</url>';
				}
	//		}
	//	}
	//}
	$seopress_sitemaps .= '</urlset>';
	return $seopress_sitemaps;
} 
echo seopress_xml_sitemap_single_term();
?>