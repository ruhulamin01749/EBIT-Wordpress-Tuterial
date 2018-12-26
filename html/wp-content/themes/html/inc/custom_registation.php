<?php

add_action('register_form','custom_registation_fields');

function custom_registation_fields(){

	if (isset($_POST['user_father'])) {
		$father = $_POST['user_father'];
	}else{
		$father = '';
	}

	?>

	<p>
		<label for="Father">Fathers Name<br>
		<input type="text" name="user_father" id="Father" class="input" value="<?php echo $father; ?>" size="20"></label>
	</p>

	<?php
}

add_action('user_register','custom_registation_form_save');
add_action( 'personal_options_update', 'custom_registation_form_save' );
add_action( 'edit_user_profile_update', 'custom_registation_form_save' );

function custom_registation_form_save( $user_id ){
	update_user_meta($user_id, 'user_father', $_POST['user_father'] );
	update_user_meta($user_id, 'user_mother', $_POST['user_mother'] );
}

add_action('show_user_profile','display_user_custom_data');
add_action('edit_user_profile','display_user_custom_data');

function display_user_custom_data( $user ){
	
	?>

	<h3>Our Custom Info</h3>
	<tr class="user-url-wrap">
		<th><label for="fathername">Fathers Name</label></th>
		<td><input type="text" name="user_father" id="fathername" value="<?php echo get_user_meta($user->ID, 'user_father', true); ?>" class="regular-text code"></td>
	</tr><br>
	<tr class="user-url-wrap">
		<th><label for="fathername">Mothers Name</label></th>
		<td><input type="text" name="user_mother" id="mothername" value="<?php echo get_user_meta($user->ID, 'user_mother', true); ?>" class="regular-text code"></td>
	</tr>

	<?php
		}
function save_extra_user_profile_fields( $user_id ) {

update_user_meta($user_id, 'user_father', $_POST['user_father'] );  

}


