<?php
namespace OmgAcfHelper;

use OmgCore\Feature;

defined( 'ABSPATH' ) || exit;

abstract class AcfBlockField extends Feature {
	protected string $post_type;

	public function __construct( string $post_type ) {
		parent::__construct();

		$this->post_type = $post_type;

		add_action( 'acf/init', $this->register() );
	}

	abstract protected function register(): callable;
}
