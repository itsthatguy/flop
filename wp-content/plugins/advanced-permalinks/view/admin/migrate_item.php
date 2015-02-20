<?php if (!defined ('ABSPATH')) die (); ?>
<div class="options">
	<a href="#delete" onclick="return delete_migration(<?php echo esc_attr( $pos ) ?>)">
		<img src="<?php echo plugins_url( '/images/delete.png', $this->base_url() ); ?>" width="16" height="16" alt="Delete"/>
	</a>
</div>

<a href="#edit" onclick="return edit_migration(<?php echo esc_attr( $pos ) ?>)">
	<?php echo esc_html( $link ) ?>
</a>
