<script type="text/javascript">
	function tyc_circleCalc() {

		//get inputs
		var r = document.circlecalc.radius.value; // in feet
		var dc = document.circlecalc.depth.value; // in inches

		// multiply radius by itself 
		r = r * r;

		//convert depth inches to feet
		dc = dc / 12;

		//calculate volume in yards
		var vc = r * dc * 3.14 / 27;

		// round numbers by the default, rounding, or to hundredths if that attribute is set (see lines 22-29)
		<?php echo $rounding; ?>

		document.circlecalc.vol.value = vc; //in yards

	}
</script>
<form name="circlecalc" class="tyc-form">
	<fieldset class="tyc-inputs">
		<legend><?php echo $circle_form_label; ?></legend>
		<label class="field_name"><?php echo $radius_label; ?></label>
		<input name="radius" class="tyc-field field" onkeyup="tyc_circleCalc();" type="text" />
		<br />
		<label class="field_name"><?php echo $depth_label; ?></label>
		<input name="depth" class="tyc-field field" onkeyup="tyc_circleCalc();" type="text" />
		<br />
	</fieldset>

	<fieldset class="tyc-total">
		<legend>Total</legend>
		<label class="field_name"><?php echo $result_label; ?></label>
		<input name="vol" class="field_total" type="text" readonly />
	</fieldset>

</form>