<?php
/*
Plugin Name: Tiny Yardage Calculator
Description: Calculates yards of material needed to cover square feet to a given depth in inches. Use shortcode [yardagecalc]. User enters dimensions, calculator returns results in yards rounded up to whole number.
Author: Kelsey Barmettler
Version: 1.1
Author URI: https://kelseybarmettler.com
*/

// Add calculator function
function get_yardageCalc($atts = array()) {

	extract(shortcode_atts(array(
		'form_label' 		=> 'Enter your dimensions',
		'length_label' 		=> 'Enter Length (Ft)',
		'width_label' 		=> 'Enter Width (Ft)',
		'depth_label'		=> 'Enter Depth (In)',
		'result_label'		=> 'Total Yards Needed',
		'type' 				=> 'rectangle',
		'circle_form_label' => 'Enter your circular dimensions',
		'radius_label'		=> 'Enter Radius (Ft)',
		'rounding' 			=> 'whole',
	), $atts));

	ob_start();
	if (isset($atts['type']) && 'circle' == $atts['type']) {
		if (isset($atts['rounding']) && 'hundredths' == $atts['rounding']) {
			$rounding = 'var vc = Math.round( vc * 100) / 100;';
		} else {
			$rounding = 'var vc = Math.ceil(vc);';
		}
		include 'circle.php';
	} else {
		// define the rounding methods
		if (isset($atts['rounding']) && 'hundredths' == $atts['rounding']) {
			$rounding = 'var v = Math.round( v * 100) / 100;';
		} else {
			$rounding = 'var v = Math.ceil(v);';
		}
		include 'rectangle.php';
	}

	$output = ob_get_contents();
	ob_end_clean();
	return $output;
}
//Add shortcode
add_shortcode('yardagecalc', 'get_yardageCalc');
