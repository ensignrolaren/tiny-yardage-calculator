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
	// set up default parameters
	extract(shortcode_atts(array(
		'form_label' => 'Enter your dimensions',
		'length_label' => 'Enter Length (Ft)',
		'width_label' => 'Enter Width (Ft)',
		'depth_label' => 'Enter Depth (In)',
		'result_label' => 'Total Yards Needed',
	), $atts));

	return '<script type="text/javascript">
		function calc() {
		  /*info:
		    1 yard   =      3 feet   = 36 inches
		    1 foot   =     12 inches
		    N feet   = (N/ 3) yards
		    N inches = (N/12) feet
		    N inches = (N/36) yards
		  */

		  //get inputs
		  var l = document.volcalc.length.value; // in feet
		  var w = document.volcalc.width.value; // in feet
		  var d = document.volcalc.depth.value; // in inches

		  //convert length feet to yards
		  l = l/3;

		  //convert width feet to yards
		  w = w/3;

		  //convert depth inches to yards
		  d = d/36;

		  //calculate volume in yards
		  var v = l * w * d;

		  // round numbers up to nearest whole number
		  var v = Math.ceil( v );

		  // round to 2 decimal places
		  //var v = Math.round( v * 100) / 100;

		  // round numbers in increments of .25
		  // var v = Math.round( v * 4 ) / 4 ;

		  document.volcalc.vol.value = v; //in yards

}	</script>
	<form name="volcalc">
	<fieldset>

	    <legend>' . $form_label . '</legend>
	    <label class="field_name">' . $length_label . '</label>
	    <input name="length" class="field" onkeyup="calc();" type="text" />
	    <br />
	    <label class="field_name">' . $width_label . '</label>
	    <input name="width" class="field" onkeyup="calc();" type="text" />
	    <br />
	    <label class="field_name">' . $depth_label . '</label>
	    <input name="depth" class="field" onkeyup="calc();" type="text" />
	    <br />
	</fieldset>

	<fieldset>
	    <legend>Total</legend>
	    <label class="field_name">' . $result_label . '</label>
	    <input name="vol" class="field_total" type="text" />
	</fieldset>

	</form>	';
}
//Add shortcode
add_shortcode('yardagecalc', 'get_yardageCalc');
