<?php

namespace OmgAcfHelper;

use OmgCore\Dependency;
use OmgCore\Feature;

defined( 'ABSPATH' ) || exit;

class AcfHelper extends Feature {
	protected Dependency $dependency;

	public function __construct( Dependency $dependency ) {
		parent::__construct();

		$this->dependency = $dependency;

		add_action( 'init', $this->init() );
	}

	protected function init(): callable {
		return function () {
			$this->dependency->require_plugin(
				'acf_pro',
				'Advanced Custom Fields Pro',
				'advanced-custom-fields-pro/acf.php'
			);
		};
	}
}
