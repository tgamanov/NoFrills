<?php

class Taras_NoFrills_Block_Template extends Mage_Core_Block_Template {


	public function fetchView( $fileName ) {

		$this->setScriptPath( Mage::getModuleDir( '', 'Taras_NoFrills' ) . DS . 'design' );

		return parent::fetchView( $this->getTemplate() );
	}

	public function setScriptPath($dir) {//helps to fix issue with changing path of the design folder
		parent::setScriptPath($dir);
		$this->_viewDir = Mage::getModuleDir('','Taras_NoFrills') . DS .'design';
		return $this;
	}
}