<?php

	/**
	 * @package Region Halland Single Page Information
	 */
	/*
	Plugin Name: Region Halland Single Page Information
	Description: Front-end-plugin som returnerar info om valfri sida
	Version: 1.1.0
	Author: Roland Hydén
	License: GPL-3.0
	Text Domain: regionhalland
	*/

	// Returnera content för en sida
	function get_region_halland_single_page_information($pageID) {
		
		// Hämta page information
		$page = get_post($pageID);

		// Lägg till sidans url
		$page->url = get_page_link($page->ID);
		
		// Lägg till featured image url inklusive alt-text
		$page->image_url = get_the_post_thumbnail_url($page->ID);
		$page->image_alt = get_post_meta(get_post_thumbnail_id($page->ID), '_wp_attachment_image_alt', TRUE);

		// Returnera page-array
		return $page;
	}


	// Metod som anropas när pluginen aktiveras
	function region_halland_single_page_information_activate() {
		// Ingenting just nu...
	}
	
	// Metod som anropas när pluginen avaktiveras
	function region_halland_single_page_information_deactivate() {
		// Ingenting just nu...
	}
	
	// Vilken metod som ska anropas när pluginen aktiveras
	register_activation_hook( __FILE__, 'region_halland_single_page_information_activate');

	// Vilken metod som ska anropas när pluginen avaktiveras
	register_deactivation_hook( __FILE__, 'region_halland_single_page_information_deactivate');

?>