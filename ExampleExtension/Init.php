<?php

/**
 * Extensions Name: Example Extension
 * Extensions URI:  https://leyka.te-st.ru/addons/exampleextension
 * Description: My Example Extension
 * Version:  1.0.0
 * Author:  Teplitsa of social technologies
 * Author URI:  https://github.com/petrozavodsky
 * Text Domain:  leyka
 * License URI:  http://www.gnu.org/licenses/gpl-3.0.txt
 * Contributors:  Vladimir "petrozavodsky" Retrozavodsky (petrozavodsky@gmail.com)
 */

namespace LeykaGold\Extensions\ExampleExtension;

use LeykaGold\Settings\Initialize;

class Init extends Initialize {

	public function __construct() {
		$this->meta(
			__( 'ExampleExtension', 'leyka' ),
			__( 'ExampleExtension example add-on', 'leyka' )
		);
	}

	public function meta( $name, $description ) {
		$this->name        = $name;
		$this->description = $description;
	}

}
