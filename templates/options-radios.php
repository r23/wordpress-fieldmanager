<?php
/**
 * Template file for options radios.
 *
 * @package Templates
 */

$cb_id = $this->get_element_id() . '-' . esc_attr( sanitize_text_field( $data_row['value'] ) ); ?>
<div class="fm-option">
	<input
		class="fm-element"
		type="radio"
		value="<?php echo esc_attr( $data_row['value'] ); ?>"
		name="<?php echo esc_attr( $this->get_form_name() ); ?>"
		id="<?php echo esc_attr( $cb_id ); ?>"
		<?php echo $this->get_element_attributes(); // Escaped in fuction call WPCS: XSS okay. ?>
		<?php echo $this->option_selected( $data_row['value'], $value, 'checked' ); // Escaped in fuction call WPCS: XSS okay. ?>
	/>
	<label for="<?php echo esc_attr( $cb_id ); ?>" class="fm-option-label">
		<?php echo esc_html( $data_row['name'] ); ?>
	</label>
</div>
