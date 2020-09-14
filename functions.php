<?php
/*
*    Register widgets in Theme
*/
function register_my_widgets() {
	register_sidebar( array(
		'name' => "Подвал",
		'id' => 'footer-sidebar',
		'description' => 'Эти виджеты будут показаны в правой колонке сайта',
		'before_title' => '<h2>',
		'after_title' => '</h2>'
	) );
}

add_action( 'widgets_init', 'register_my_widgets' );


/*
*    Register scripts and styles
*/
$cssFilePath = glob( get_template_directory() . '/css/dist/main.min.*' );
$cssFileURI = get_template_directory_uri() . '/css/dist/' . basename($cssFilePath[0]);
$jsFilePath = glob( get_template_directory() . '/js/dist/app.min.*.js' );
$jsFileURI = get_template_directory_uri() . '/js/dist/' . basename($jsFilePath[0]);

wp_enqueue_style( 'site_main_css', get_template_directory_uri() . '/css/dist/main.min.css' );
wp_enqueue_script( 'site_main_js', get_template_directory_uri() . '/js/dist/app.min.js' , null , null , true );
wp_enqueue_style( 'site_main_css', $cssFileURI );
wp_enqueue_script( 'site_main_js', $jsFileURI , null , null , true );

function theme_scripts() {

    if(is_front_page()){
        wp_enqueue_script('header-styles', get_template_directory_uri() . '/js/src/scripts/header-styles.js', array(), null, true);
        // wp_enqueue_script('accordion-script', get_template_directory_uri() . '/js/src/scripts/accordion.js', array(), null, true);
		wp_enqueue_script('get-set-course-info', get_template_directory_uri() .'/js/src/scripts/get-set-course-info.js', array(), null, true);
		wp_enqueue_script('promo-flashlight', get_template_directory_uri() .'/js/src/scripts/promo-flashlight.js', array(), null, true);
		wp_enqueue_script('image-transition', get_template_directory_uri() .'/js/src/scripts/image-transition.js', array(), null, true);
    }
}

add_action('wp_enqueue_scripts', 'theme_scripts');


/**
 * Adds Foo_Widget widget.
 */
class Contacts_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'contacts_widget', // Base ID
			esc_html__( 'Контактна iнформацiя Beauty cult', 'text_domain' ), // Name
			array( 'description' => esc_html__( 'Контактная информация о компании', 'text_domain' ), ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		$address = $instance['address'];
		$phone1 = $instance['phone1'];
		$phone2 = $instance['phone2'];
		$instagram = $instance['instagram'];
		$facebook = $instance['facebook'];

		echo $args['before_widget'];
		?>

		<div class="footer__contacts">
    		<div class="container">

			<?php

			// if ( ! empty( $instance['address'] ) ) {
				// echo $args['before_title'] . apply_filters( 'widget_title', $instance['address'] ) . $args['after_title'];
			// } ?>

				<h3 class="h1 footer-title">Контакти</h3>

				<p class="contacts-item">
					Адреса: <a class="bold"> <?php echo $address ?></a>
				</p>
				<p class="contacts-item">
					Телефон: <a href="<?php echo 'tel:' .  $phone1; ?>"> <span class="bold"><?php echo $phone1 ?>;</span></a>
					<a href="<?php echo 'tel:' .  $phone2; ?>" class="bold push-right block text-right"><?php echo $phone2 ?></a>
				</p>

				<ul class="social-list">
					<li class="item">
						<a href="<?php echo $instagram; ?>" class="item-link social-link" target="_blank">
							<svg viewBox="0 0 26 26" fill="" xmlns="http://www.w3.org/2000/svg">
								<path d="M13.0012 0C9.4706 0 9.02751 0.0154379 7.64083 0.0785427C6.25686 0.141918 5.31218 0.361025 4.48559 0.682507C3.63056 1.01455 2.90526 1.45872 2.18267 2.18159C1.45954 2.90418 1.01536 3.62947 0.682236 4.48423C0.359941 5.3111 0.140564 6.25604 0.0782715 7.63948C0.01625 9.02616 0 9.46951 0 13.0001C0 16.5308 0.0157087 16.9725 0.0785427 18.3592C0.142189 19.7429 0.361296 20.6878 0.682507 21.5144C1.01482 22.3692 1.45899 23.0945 2.18186 23.8171C2.90418 24.5402 3.62948 24.9854 4.48396 25.3178C5.3111 25.6392 6.25604 25.8584 7.63975 25.9215C9.02643 25.9846 9.46924 26 12.9996 26C16.5305 26 16.9722 25.9846 18.3589 25.9215C19.7429 25.8584 20.6889 25.639 21.5155 25.3178C22.3703 24.9854 23.0945 24.5402 23.8171 23.8171C24.5402 23.0945 24.9844 22.3692 25.3172 21.5144C25.6371 20.6875 25.8562 19.7429 25.9212 18.3594C25.9835 16.9728 25.9997 16.5308 25.9997 13.0001C25.9997 9.46951 25.9835 9.02643 25.9212 7.63975C25.8562 6.25577 25.6368 5.3111 25.3172 4.4845C24.9844 3.62947 24.5402 2.90418 23.8171 2.18159C23.0939 1.45845 22.3708 1.01428 21.515 0.682507C20.6859 0.361025 19.7407 0.141918 18.357 0.0785427C16.9703 0.0154379 16.5289 0 12.9969 0H13.0012ZM11.835 2.34273C12.1811 2.34219 12.5673 2.34273 13.0012 2.34273C16.4723 2.34273 16.8837 2.35519 18.2544 2.41748C19.5219 2.47544 20.2098 2.68724 20.668 2.86518C21.2744 3.1008 21.707 3.38247 22.162 3.83748C22.617 4.29248 22.8987 4.72582 23.1348 5.33249C23.3128 5.79021 23.5246 6.47813 23.5825 7.74564C23.6445 9.11607 23.6583 9.52774 23.6583 12.9972C23.6583 16.4666 23.6445 16.8782 23.5825 18.2487C23.5246 19.5162 23.3128 20.2044 23.1348 20.6618C22.8992 21.2685 22.617 21.7005 22.162 22.1552C21.707 22.6102 21.275 22.8922 20.668 23.1275C20.2103 23.3063 19.5219 23.5175 18.2544 23.5755C16.8837 23.6378 16.4723 23.6513 13.0012 23.6513C9.52991 23.6513 9.11851 23.6378 7.74808 23.5755C6.48057 23.517 5.79264 23.3052 5.33412 23.1275C4.72744 22.8916 4.29411 22.6102 3.8391 22.1552C3.3841 21.6999 3.10243 21.2677 2.86626 20.6607C2.68832 20.2033 2.47625 19.5151 2.41857 18.2476C2.35627 16.8769 2.34382 16.4655 2.34382 12.9939C2.34382 9.52233 2.35627 9.11282 2.41857 7.74239C2.47653 6.47488 2.68832 5.78696 2.86626 5.3287C3.10189 4.72203 3.3841 4.28869 3.8391 3.83369C4.29411 3.37868 4.72744 3.09701 5.33412 2.86084C5.79237 2.68209 6.48057 2.47084 7.74808 2.41261C8.94734 2.35844 9.4121 2.34219 11.835 2.33948V2.34273ZM19.9406 4.5013C19.0791 4.5013 18.3806 5.19924 18.3806 6.06077C18.3806 6.92203 19.0791 7.62079 19.9406 7.62079C20.8021 7.62079 21.5009 6.92203 21.5009 6.06077C21.5009 5.19951 20.8021 4.50075 19.9406 4.50075V4.5013ZM13.0012 6.32402C9.31433 6.32402 6.32511 9.31324 6.32511 13.0001C6.32511 16.687 9.31433 19.6749 13.0012 19.6749C16.6881 19.6749 19.6762 16.687 19.6762 13.0001C19.6762 9.31324 16.6878 6.32402 13.0012 6.32402ZM13.0012 8.66676C15.3943 8.66676 17.3346 10.6068 17.3346 13.0001C17.3346 15.3932 15.3943 17.3335 13.0012 17.3335C10.6078 17.3335 8.66784 15.3932 8.66784 13.0001C8.66784 10.6068 10.6078 8.66676 13.0012 8.66676Z" fill="#A8CEC2"/>
							</svg>
						</a>
					</li>

					<li class="item">
						<a href="<?php echo $facebook; ?>" class="item-link social-link" target="_blank">
							<svg viewBox="0 0 14 26" fill="" xmlns="http://www.w3.org/2000/svg">
								<path d="M8.75777 26V14.1408H12.7386L13.3327 9.51828H8.75777V6.5713C8.75777 5.22852 9.12614 4.32541 11.0512 4.32541H13.4991V0.178245C13.0713 0.11883 11.6216 0 9.93419 0C6.40494 0 3.99269 2.15082 3.99269 6.10786V9.51828H0V14.1408H3.99269V26H8.75777Z" fill="#A8CEC2"/>
							</svg>
						</a>
					</li>
				</ul>
			</div>
		</div>

		<?php
		echo $args['after_widget'];
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		$address = ! empty( $instance['address'] ) ? $instance['address'] : esc_html__( 'Нова адреса', 'text_domain' );
		$phone1 = ! empty( $instance['phone1'] ) ? $instance['phone1'] : esc_html__( 'Введiть телефон', 'text_domain' );
		$phone2 = ! empty( $instance['phone2'] ) ? $instance['phone2'] : esc_html__( 'Введiть телефон', 'text_domain' );
		$instagram = ! empty( $instance['instagram'] ) ? $instance['instagram'] : esc_html__( 'Вставте url профiлю', 'text_domain' );
		$facebook = ! empty( $instance['facebook'] ) ? $instance['facebook'] : esc_html__( 'Вставте url профiлю', 'text_domain' );

		?>
		<br>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'address' ) ); ?>"><?php esc_attr_e( 'Адреса:', 'text_domain' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'address' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'address' ) ); ?>" type="text" value="<?php echo esc_attr( $address ); ?>">
		</p>

		<br>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'phone1' ) ); ?>"><?php esc_attr_e( 'Телефон:', 'text_domain' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'phone1' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'phone1' ) ); ?>" type="text" value="<?php echo esc_attr( $phone1 ); ?>">
		</p>

		<br>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'phone2' ) ); ?>"><?php esc_attr_e( 'Телефон №2:', 'text_domain' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'phone2' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'phone2' ) ); ?>" type="text" value="<?php echo esc_attr( $phone2 ); ?>">
		</p>

		<br>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'instagram' ) ); ?>"><?php esc_attr_e( 'Instagram профiль:', 'text_domain' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'instagram' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'instagram' ) ); ?>" type="text" value="<?php echo esc_attr( $instagram ); ?>">
		</p>

		<br>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'facebook' ) ); ?>"><?php esc_attr_e( 'Facebook профiль:', 'text_domain' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'facebook' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'facebook' ) ); ?>" type="text" value="<?php echo esc_attr( $facebook ); ?>">
		</p>
		<br>
		<?php 
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['address'] = ( ! empty( $new_instance['address'] ) ) ? sanitize_text_field( $new_instance['address'] ) : '';
		$instance['phone1'] = ( ! empty( $new_instance['phone1'] ) ) ? sanitize_text_field( $new_instance['phone1'] ) : '';
		$instance['phone2'] = ( ! empty( $new_instance['phone2'] ) ) ? sanitize_text_field( $new_instance['phone2'] ) : '';
		$instance['instagram'] = ( ! empty( $new_instance['instagram'] ) ) ? sanitize_text_field( $new_instance['instagram'] ) : '';
		$instance['facebook'] = ( ! empty( $new_instance['facebook'] ) ) ? sanitize_text_field( $new_instance['facebook'] ) : '';

		return $instance;
	}

} // class Foo_Widget

// register Foo_Widget widget
function register_contacts_widget() {
    register_widget( 'Contacts_Widget' );
}
add_action( 'widgets_init', 'register_contacts_widget' );


add_filter( 'jpeg_quality', create_function( '', 'return 100;' ) );