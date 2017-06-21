<?php

class Taras_NoFrills_ReferenceController extends Mage_Core_Controller_Front_Action {

	/**
	 * Use to set the base page structure
	 */
	protected function _initLayout() {
		$path_page = Mage::getModuleDir( '', 'Taras_NoFrills' ) . DS . 'page-layouts' . DS . 'page.xml';
		$xml       = file_get_contents( $path_page );
		$layout    = Mage::getSingleton( 'core/layout' )
		                 ->getUpdate()
		                 ->addUpdate( $xml );
	}

	/**
	 * Use to send output
	 */

	protected function _sendOutput() {
		$layout = Mage::getSingleton( 'core/layout' );

		$layout->generateXml()
		       ->generateBlocks();

		echo $layout->setDirectOutput( false )->getOutput();
	}

	public function indexAction() {
		$this->_initLayout();
		Mage::getSingleton( 'core/layout' )
		    ->getUpdate()
		    ->addUpdate( '
				<reference name="content">
					<block type="core/text" name="our_message">
						<action method="setText"><text>Here we go!</text></action>
					</block>
				</reference>
' );
		$this->_sendOutput();
	}

	protected function _loadUpdateFile( $file ) {
		$path_update = Mage::getModuleDir( '', 'Taras_NoFrills' ) . DS . 'content-updates' . DS . $file;
		$layout      = Mage::getSingleton( 'core/layout' )
		                   ->getUpdate()
		                   ->addUpdate( file_get_contents( $path_update ) );
	}

	public function foxAction() {
		$this->_initLayout();
		$this->_loadUpdateFileFromRequest( 'fox.xml' );
		$this->_sendOutput();
	}

	public function dogAction() {
		$this->_initLayout();
		$this->_loadUpdateFile( 'dog.xml' );
		$this->_sendOutput();
	}

	public function ceaserAction() {
		$this->_initLayout();
		$this->_loadUpdateFile( 'ceaser.xml' );
		$this->_sendOutput();
	}

	protected function _loadUpdateFileFromRequest() {
		$path_update = Mage::getModuleDir( '', 'Taras_NoFrills' ) . DS . 'content-updates' . DS . $this->getFullActionName() . '.xml';
		$layout      = Mage::getSingleton( 'core/layout' )
		                   ->getUpdate()
		                   ->addUpdate( file_get_contents( $path_update ) );
	}

}