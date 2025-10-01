<?php
namespace OmgAcfHelper;

use OmgCore\OmgFeature;
use OmgCore\OmgApp;

defined( 'ABSPATH' ) || exit;

abstract class AcfBlockField extends OmgFeature {
	public function __construct( ?OmgApp $app = null ) {
		parent::__construct( $app );
		add_action( 'acf/init', $this->register() );
	}

	abstract protected function register(): callable;
}
