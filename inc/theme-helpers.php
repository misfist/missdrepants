<?php 
/**
 * Allow Shortcodes in Widgets
 */
add_filter('widget_text', 'do_shortcode');

/**
 * Dynamic Year Shortcode
 * Usage: Use [year] in your posts
 */
function mdp_year_shortcode() {
  $year = date( 'Y' );
  return $year;
}
add_shortcode( 'year', 'mdp_year_shortcode' );

/**
 * Dynamic Site Name Shortcode
 * Usage: Use [site_name] in your posts
 */
function mdp_site_name_shortcode() {
  $name = get_bloginfo( 'name' );
  return $name;
}
add_shortcode( 'site_name', 'mdp_site_name_shortcode' );

/**
 * Dynamic Site Description Shortcode
 * Usage: Use [site_description] in your posts
 */
function mdp_site_description_shortcode() {
  $description = get_bloginfo( 'description' );
  return $description;
}
add_shortcode( 'site_description', 'mdp_site_description_shortcode' );




?>