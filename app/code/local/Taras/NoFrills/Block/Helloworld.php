<?php

class Taras_NoFrills_Block_Helloworld extends Mage_Core_Block_Template {
	public function _construct() {
		$this->setTemplate( 'taras/nofrills/helloworld4.phtml' );

		return parent::_construct();
	}

	public function _beforeToHtml() {
		$block_1 = new Mage_Core_Block_Text();
		$block_1->setText( 'Original Text. ' );
		$this->setChild( 'the_first', $block_1 );

		$block_2 = new Mage_Core_Block_Text();
		$block_2->setText( 'The second sentence. ' );
		$this->setChild( 'the_second', $block_2 );
	}

	public function fetchTitle() {
		return 'Hello Fancy World';
	}

	public function fetchView( $fileName ) {
		$this->setScriptPath(
			Mage::getModuleDir( '', 'Taras_Nofrills' ) . DS . 'design'
		);

		return parent::fetchView( $this->getTemplate() );
	}
}