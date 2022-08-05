<script type="text/javascript">
	function tyc_calc() {

		// get inputs
		var l = document.volcalc.length.value; // in feet
		var w = document.volcalc.width.value; // in feet
		var d = document.volcalc.depth.value; // in inches

		// Convert length in feet to yards
		l = l / 3;

		// Convert width in feet to yards
		w = w / 3;

		// Convert depth in inches to yards
		d = d / 36;

		// Calculate volume in yards
		var v = l * w * d;

		// Round numbers by the default (whole), or to hundredths if that attribute is set
		<?php echo $rounding; ?>

		document.volcalc.vol.value = v; // in yards

	}
</script>
<form name="volcalc" class="tyc-form">
	<fieldset class="tyc-inputs">
		<legend><?php echo $form_label	; ?></legend>
		<label class="field_name"><?php echo $length_label; ?></label>
		<input name="length" class="tyc-field field" onkeyup="tyc_calc();" type="text" />
		<br />
		<label class="field_name"><?php echo $width_label; ?></label>
		<input name="width" class="tyc-field field" onkeyup="tyc_calc();" type="text" />
		<br />
		<label class="field_name"><?php echo $depth_label; ?></label>
		<input name="depth" class="tyc-field field" onkeyup="tyc_calc();" type="text" />
		<br />
	</fieldset>

	<fieldset class="tyc-total">
		<legend>Total</legend>
		<label class="field_name"><?php echo $result_label; ?></label>
		<input name="vol" class="field_total" type="text" readonly />
	</fieldset>

</form>