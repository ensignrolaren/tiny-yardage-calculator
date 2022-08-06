=== Tiny Yardage Calculator ===
Contributors: ensignrolaren
Tags: calculator, yardage, calculate
Requires at least: 3.0.1
Tested up to: 6.0
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Calculates yards of material needed to cover square feet to a given depth in inches. User enters dimensions, calculator returns results in cubic yards.

== Description ==

A simple form to calculate how many yards of material (such as bark mulch, soil, concrete, gravel, etc) are needed to cover square feet to a given depth in inches.

By default, the calculator is for rectangular areas. User enters length and width in feet and depth in inches; the calculator returns yards of material needed, rounded up to the nearest whole number. You can also round to two decimal places (hundredths) by adding a parameter to the shortcode, like this:

`[yardagecalc rounding="hundredths"]`

I've also included calculations for circular and right triangular areas– just modify the shortcode like this:

**CIRCLE**

`[yardagecalc type="circle"]`

**TRIANGLE**

`[yardagecalc type="triangle"]`

The calculator has no dependencies, adds ✨nothing✨ to your WordPress dashboard, and is style agnostic.

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/` directory, or install the plugin through the WordPress plugins screen.

2. Activate the plugin.

3. Use the shortcode `[yardagecalc]` to add the calculator wherever you want it. Alternatively, you could also include the form in a page template with php. Just add the following wherever you want the calculator to appear: `<?php echo do_shortcode("[yardagecalc]"); ?>`

== Frequently Asked Questions ==

= Can I adjust the calculator to round values to two decimal points (hundredths place)? =
Sure! Just add `rounding="hundredths"` to your shortcode, like so:

`[yardagecalc rounding="hundredths"]`

= Can I calculate areas that aren't rectangular, like circles and right triangles? =
Yes! Just add `type="circle"` or `type="triangle"` to your shortcode. Examples:

**CIRCLE**

`[yardagecalc type="circle"]`

**TRIANGLE**

`[yardagecalc type="triangle"]`

= How do I change the text on the form labels? =
Optionally, you may change the text on the form labels by adding attributes to your shortcode. For example, if you wanted to change just the label on the result field, you would use the following shortcode:

`[yardagecalc result_label="Your custom text here"]`

Just replace the text inside the quotes with your own text. Wrapping your custom text in quotes, as in the example above, is necessary to ensure your labels display properly.

Here's examples of all three calculation types with ALL the labels customized:

RECTANGLE

`[yardagecalc form_label="Your custom text here" length_label="Your custom text here" width_label="Your custom text here" depth_label="Your custom text here" result_label="Your custom text here"]`


CIRCLE

`[yardagecalc type="circle" form_label="Your custom text here" radius_label="Your custom text here" depth_label="Your custom text here" result_label="Your custom text here"]`

TRIANGLE

`[yardagecalc type="triangle" form_label="Your custom text here" base_label="Your custom text here" height_label="Your custom text here" depth_label="Your custom text here" result_label="Your custom text here"]`

You can choose to replace or translate the text on all, some, or none of your fields. If you want to use the default text on a label, just leave that attribute out of the shortcode. The bare shortcode `[yardagecalc]` will use the default labels for all fields.

= Does this plugin work with the block editor? =
Yes! Just choose the shortcode block type and type the `[yardagecalc]` shortcode exactly as you would using the classic editor.

== Screenshots ==

1. How to add the calculator to any page using the shortcode `[yardagecalc]`
2. How the calculator appears when you add it to a page with no custom css styling. It will fit whatever CSS styles you use, so by default it should fit in with your theme.

== Changelog ==
= 1.2 =
* Added two new calculator types, circle and triangle
* Changed default function name from `calc()` to `tyc_calc()` to prevent possible conflicts with other plugins
* Added option to return values rounded to two decimal places (hundredths place)
* Added some classes to form elements to make it easier to style the form with your own CSS

= 1.1 =
* Added shortcode attributes to be able to optionally customize calculator field labels

= 1.0 =
* Published plugin