<?php
namespace OmgAcfHelper;

use OmgCore\Feature;

defined( 'ABSPATH' ) || exit;

abstract class AcfBlockField extends Feature {
	public function __construct() {
		parent::__construct();
		add_action( 'acf/init', $this->register() );
	}

	abstract protected function register(): callable;
}
