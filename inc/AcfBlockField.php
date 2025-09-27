<?php
namespace OmgAcfHelper;

use OmgCore\OmgFeature;
use OmgCore\OmgApp;

defined( 'ABSPATH' ) || exit;

abstract class AcfBlockField extends OmgFeature {
	public function __construct( ?OmgApp $app = null, ?callable $get_config = null, ?callable $get_i18n = null ) {
		parent::__construct( $app, $get_config, $get_i18n );
		add_action( 'acf/init', $this->register() );
	}

	abstract protected function register(): callable;
}
