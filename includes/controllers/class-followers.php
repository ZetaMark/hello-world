<?php
namespace HivePress\Controllers;

use HivePress\Helpers as hp;
use HivePress\Models;
use HivePress\Blocks;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
add_action( 'redirect_helloWorld_page', 'check_admin_status' );

/**
 * Controller class.
 */
final class Followers extends Controller {

	/**
	 * Class constructor.
	 *
	 * @param array $args Controller arguments.
	 */
	public function __construct( $args = [] ) {
		$args = hp\merge_arrays(
			[
				'routes' => [
					// Define custom URL routes here.
					'hello_world_page' => [
						'title'     => esc_html__( 'HelloWorld', 'foo-helloWorld' ),
						'base'      => 'user_account_page',
						'path'      => '/hello-world”',
						'redirect'  => [ $this, 'redirect_helloWorld_page' ],
						'action'    => [ $this, 'render_helloWorld_page' ],
						'paginated' => true,
					],
				],
			],
			$args
		);

		parent::__construct( $args );
	}
	
	// Implement the route actions here.

	function check_admin_status() {
		if ( ! is_user_logged_in() || ! current_user_can( 'administrator' ) ) {
			// If the user is not logged in or not an administrator, redirect to the home page.
			wp_safe_redirect( home_url() );
			exit;
		}
		
		$current_user = wp_get_current_user();
		$registered = strtotime( $current_user->user_registered );
		$one_hour_ago = strtotime( '-1 hour' );
		
		if ( $registered > $one_hour_ago ) {
			// If the user is not registered for at least one hour, redirect to the home page.
			wp_safe_redirect( home_url() );
			exit;
		}
	}
	

}