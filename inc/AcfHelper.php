<?php

namespace OmgAcfHelper;

use OmgCore\OmgFeature;
use OmgCore\OmgApp;

defined( 'ABSPATH' ) || exit;

class AcfHelper extends OmgFeature {
	public function __construct( OmgApp $app ) {
		parent::__construct( $app );
		add_action( 'init', $this->init() );
	}

	protected function init(): callable {
		return function () {
			$this->app->dependency()->require_plugin(
				'acf_pro',
				'Advanced Custom Fields Pro',
				'advanced-custom-fields-pro/acf.php'
			);
		};
	}
}
