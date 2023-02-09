<?php
namespace HivePress\Components;

use HivePress\Helpers as hp;
use HivePress\Models;
use HivePress\Emails;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
 * Component class.
 */
final class Followers extends Component {

	/**
	 * Class constructor.
	 *
	 * @param array $args Component arguments.
	 */
	public function __construct( $args = [] ) {
		// Attach functions to hooks here (e.g. add_action, add_filter).

		parent::__construct( $args );
	}

	// Implement the attached functions here.
}