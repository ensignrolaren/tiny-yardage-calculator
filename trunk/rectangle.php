<script type="text/javascript">
	function tyc_calc() {

		//get inputs
		var l = document.volcalc.length.value; // in feet
		var w = document.volcalc.width.value; // in feet
		var d = document.volcalc.depth.value; // in inches

		//convert length feet to yards
		l = l / 3;

		//convert width feet to yards
		w = w / 3;

		//convert depth inches to yards
		d = d / 36;

		//calculate volume in yards
		var v = l * w * d;

		// round numbers by the default, rounding, or to hundredths if that attribute is set (see lines 22-29)
		<?php echo $rounding; ?>

		document.volcalc.vol.value = v; //in yards

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