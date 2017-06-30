<?php

class Taras_NoFrills_Block_Youtube extends Mage_Core_Block_Abstract implements Mage_Widget_Block_Interface {
	protected function _toHtml() {
		$this->setVideoId('777');
		return '<iframe width="640" height="360" src="//www.youtube.com/embed/IJooerCcq6g?feature=player_detailpage"
 				frameborder="0" allowfullscreen></iframe>';
	}
}