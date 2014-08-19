<?php
/**
 * Adds Session CPT
 */

add_action( 'init', 'create_company_post' );

function create_company_post() {
  register_post_type('company',
                     array(
                      'labels' => array(
                        'name' => 'Companies',
                        'singular_name' => 'Company',
						'add_new_item' => 'Add New Session',
						'edit_item' => 'Edit Session'
                       ),
                     'hierarchical' => false,
                     'public' => true,
                     'show_ui' => true,
                     'menu_icon' => 'dashicons-nametag',
                     'supports' => array( 'title', 'editor','excerpt'),
                     'has_archive' => true
                     ));

}
add_action( 'admin_init', 'session_admin' );
function company_admin() {

	}

add_action('edit_form_after_title','display_company_subtitle');

function display_company_subtitle() {

    global $post, $typenow, $pagenow;
    if( in_array($typenow, array('company') ) && (($pagenow == 'post.php')||($pagenow == 'post-new.php')) )  {
        ?><style type="text/css" id="company-editor-css">
			#subtitle {
				padding: 6px 6px;
				font-size: 1.2em;

				height: 1.7em;
				width: 100%;
				outline: 0;
				margin: 0 0 12px 0;
				background-color: #fff;
			}

		input#subtitle::-webkit-input-placeholder {
			padding: 6px 0px;
		}
		input#subtitle::-moz-placeholder {
			padding: 6px 0px;
		}
		input#subtitle:-moz-placeholder {
			padding: 6px 0px;
		}
		input#subtitle:-ms-input-placeholder {
			padding: 6px 0px;
		}
		</style>
		<label class="screen-reader-text" id="title-prompt-text" for="subtitle"><?php echo apply_filters( 'enter_subtitle_here', __( 'Enter subtitle here' ), $post ); ?></label>
	<input type="text" name="company_subtitle" size="30" value="<?php echo esc_attr(htmlspecialchars( get_post_meta($post->ID, '_company_subtitle', true) )); ?>" id="subtitle" placeholder="<?php echo apply_filters( 'enter_subtitle_here', __( 'Enter subtitle here' ), $post ); ?>" autocomplete="off" />
		<?php
    }
}

add_action('save_post', 'add_company_fields', 10, 2);
function add_company_fields($company_id, $company) {
  if($company->post_type == 'company') {

    if(isset($_POST['company_featured']) && $_POST['company_featured'] != '') {
	    update_post_meta($company_id, 'company_featured', $_POST['company_featured']);
    } else {
	    update_post_meta($company_id, 'company_featured','');
    }

  }

}


