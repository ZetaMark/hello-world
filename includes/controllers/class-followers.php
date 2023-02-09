<?php
namespace HivePress\Controllers;

use HivePress\Helpers as hp;
use HivePress\Models;
use HivePress\Blocks;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

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
}