<?php if (!defined ('ABSPATH')) die (); ?>
<form action="<?php echo plugins_url( 'ajax.php', $this->base_url() ); ?>" method="post" accept-charset="utf-8" id="form_<?php echo intval( $pos ) ?>">
	<input type="text" size="40" name="permalink" value="<?php echo $migration ?>"/>

	<input type="hidden" name="cmd" value="save_migrate"/>
	<input type="hidden" name="id" value="<?php echo esc_attr( $pos ) ?>"/>

	<input type="submit" name="save" value="Save"/>
</form>

<script type="text/javascript" charset="utf-8">
	$('#form_<?php echo intval( $pos ) ?>').ajaxForm (function() { $('#item_<?php echo intval( $pos ) ?>').load (wp_apl_base, { cmd: 'show_migrate', id: <?php echo intval( $pos ) ?>});});
</script>
