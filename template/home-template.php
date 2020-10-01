<?php
/**
*Template Name: Home
*
* @author      CodeGearThemes
* @category    WordPress
* @package     pixeep
* @version     1.0.0
*
**/
get_header();

	$sections = pixeep_home_sections();
	foreach( $sections as $block){
	    $section =  $block['section'];
		$partials = $block['parts'];
	    get_template_part( 'template-parts/sections/section', $partials );
	}

get_footer(); ?>
