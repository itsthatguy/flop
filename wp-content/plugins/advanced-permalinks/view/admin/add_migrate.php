<?php if (!defined ('ABSPATH')) die (); ?>
<form action="" method="post" accept-charset="utf-8"<?php if ($start) : ?>onsubmit="return save_link (this)"<?php endif; ?>>
	<table>
		<tr>
			<th><?php _e ('Old permalink', 'advanced-permalinks'); ?>:</th>
			<td>
				<input size="40" type="text" name="permalink" value="<?php echo esc_attr( $link ? $link : '' ) ?>"/>

				<?php if ($start) : ?>
					<input class="button-primary" type="submit" name="save" value="<?php _e ('Save', 'advanced-permalinks'); ?>"/>
					<input class="button-secondary" type="submit" name="cancel" value="<?php _e ('Cancel', 'advanced-permalinks'); ?>" onclick="return cancel_link (<?php echo $start ?>)"/>
					<input type="hidden" name="cmd" value="save"/>
					<input type="hidden" name="id" value="<?php echo esc_attr( $start ) ?>"/>
				<?php else : ?>
					<input class="button-primary" type="submit" name="add" value="<?php _e ('Add', 'advanced-permalinks'); ?>" id="add"/>
				<?php endif; ?>
			</td>
		</tr>
	</table>
</form>
