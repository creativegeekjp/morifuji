<?php
/*
Plugin Name: Count Children
Plugin URI: http://shinraholdings.com/plugins/count-children
Description: Adds a custom short code that returns the number of children for a given page.
Version: 1.0.0
Author: bitacre
Author URI: http://shinraholdings.com
License: GPLv23
	Copyright 2012 Shinra Web Holdings (plugins@shinraholdings.com)

Usage: 
	[children page="page-slug"]
	[children type="id" page="28"]
	[children type="name" page="Parent Page Name"]
	
Shortcodes: children, countchildren, childcount, pagechildren
*/

function swh_count_children( $atts ) {
	$args = array( 
		'page' => NULL,
		'type' => 'slug' );
	extract( shortcode_atts( $args, $atts ) ); 
	
	// determine type
	$type = trim( strtolower( $type ) );
	if( $type != 'name' && $type != 'id' ) $type = 'slug';

	// get id
	if( $type == 'id' ) { $parent_id = $page; }
	elseif( $type == 'name' ) { $parent_page = get_page_by_title( $page ); $parent_id = $parent_page->ID; }
	else { $parent_page = get_page_by_path( $page ); $parent_id = $parent_page->ID; }
	
	// get children
	global $wpdb;
    $query = "SELECT COUNT(ID) FROM {$wpdb->posts} WHERE post_parent = $parent_id AND post_type = 'page' ";
    $result = mysql_query($query) or die( mysql_error() );
    while( $row = mysql_fetch_array($result) ){
       return $row['COUNT(ID)'];
    }
	
	// else 0
    return 0;
}

// list of shortcodes
$swh_count_children_shortcodes = array( // list of shortcodes
	'children', 
	'countchildren', 
	'childcount', 
	'pagechildren' );

// add shortcodes
foreach( $swh_count_children_shortcodes as $shortcode ) 
	add_shortcode( $shortcode, 'swh_count_children' );
?>