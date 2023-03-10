<?php
namespace HivePress\Menus;

use HivePress\Helpers as hp;

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

class Foo_Bar extends Menu {
	public function __construct( $args = [] ) {
		$args = hp\merge_arrays(
			[
				// Define the menu items.
				'items' => [
					'first_item'  => [
						'label'  => 'Hello World',
						'route'  => 'Hello_World_Page',
						'_order' => 123,
					],

					'second_item' => [
						'label'  => 'Second Item',
						'url'    => 'https://example.com',
						'_order' => 321,
					],
				],
			],
			$args
		);

		parent::__construct( $args );
	}
}