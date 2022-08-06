<script type="text/javascript">
	function tyc_tricalc() {

		// get inputs
		var b = document.tricalc.base.value; // in feet
		var h = document.tricalc.height.value; // in feet
		var dt = document.tricalc.depth.value; // in inches

		// Convert base in feet to yards
		b = b / 3;

		// Convert height in feet to yards
		h = h / 3;

		// Get square yards of triangular area
		a = b * h * .5;

		// Convert depth in inches to yards
		dt = dt / 36;

		// Calculate volume in yards
		var vt = a * dt;

		// Round numbers by the default (whole), or to hundredths if that attribute is set
		<?php echo $rounding; ?>

		document.tricalc.vol.value = vt; // in yards

	}
</script>
<form name="tricalc" class="tyc-form">
	<fieldset class="tyc-inputs">
		<legend><?php echo $form_label; ?></legend>
		<label class="field_name"><?php echo $base_label; ?></label>
		<input name="base" class="tyc-field field" onkeyup="tyc_tricalc();" type="text" />
		<br />
		<label class="field_name"><?php echo $height_label; ?></label>
		<input name="height" class="tyc-field field" onkeyup="tyc_tricalc();" type="text" />
		<br />
		<label class="field_name"><?php echo $depth_label; ?></label>
		<input name="depth" class="tyc-field field" onkeyup="tyc_tricalc();" type="text" />
		<br />
	</fieldset>

	<fieldset class="tyc-total">
		<legend>Total</legend>
		<label class="field_name"><?php echo $result_label; ?></label>
		<input name="vol" class="field_total" type="text" readonly />
	</fieldset>

</form>