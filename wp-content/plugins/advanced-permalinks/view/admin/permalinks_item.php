<?php if (!defined ('ABSPATH')) die (); ?>
<div class="options">
	<a href="#delete" onclick="return delete_link(<?php echo esc_attr( $start ) ?>)">
		<img src="<?php echo plugins_url( '/images/delete.png', $this->base_url() ); ?>" width="16" height="16" alt="Delete"/>
	</a>
</div>

<a href="#edit" onclick="return edit_link(<?php echo $start ?>)">
	<?php _e ('Post', 'advanced-permalinks'); ?> <?php echo esc_html( $start ); ?><?php if ($link['end'] != $start) echo '-'.esc_html( $link['end'] ) ?>

&raquo; <code><?php echo esc_html( $link['link'] )?></code></a>
