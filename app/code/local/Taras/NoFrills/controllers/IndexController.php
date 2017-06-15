<?php

class Taras_NoFrills_IndexController extends Mage_Core_Controller_Front_Action {
	public function indexAction() {
		var_dump( __METHOD__ ); //string 'Taras_NoFrills_IndexController::indexAction' (length=43)
	}

	public function index2Action() {
		$block = new Mage_Core_Block_Text();
		$block->setText('Hello World');
		echo $block->toHtml();
	}

	public function index3Action() {
		$block = new Mage_Core_Block_Template();
		$block->setTemplate('taras/nofrills/helloworld.phtml');
		echo $block->toHtml();
	}

	public function index4Action() {
		$block = new Mage_Core_Block_Template();
		$block->setTemplate('taras/nofrills/helloworld.phtml');
		var_dump($block->getTemplateFile()); //string 'frontend/rwd/default/template/taras/nofrills/helloworld.phtml' (length=61)
	}

	public function index5Action() {
		$block = new Mage_Core_Block_Template();
		$block->setTemplate('taras/nofrills/helloworld.phtml');
		echo $block->toHtml();
	}

	public function index6Action() {
		$block = new Mage_Core_Block_Template();
		$block->setTemplate('taras/nofrills/helloworld2.phtml');
		echo $block->toHtml();
	}

	public function index7Action() {
		$paragraph_block = new Mage_Core_Block_Text();
		$paragraph_block->setText('One paragraph to rule them all.');

		$main_block = new Mage_Core_Block_Template();
		$main_block->setTemplate('taras/nofrills/helloworld2.phtml');

		$main_block->setChild('the_first',$paragraph_block);
		echo $main_block->toHtml();
	}

	public function index8Action()  {
		$block_1 = new Mage_Core_Block_Text();
		$block_1->setText('Original Text');

		$block_2 = new Mage_Core_Block_Text();
		$block_2->setText('The second sentence. ');

		$main_block = new Mage_Core_Block_Template();
		$main_block->setTemplate('taras/nofrills/helloworld3.phtml');

		$main_block->setChild('the_first', $block_1);
		$main_block->setChild('the_second', $block_2);

		$block_1->setText('Wait, I want this text instead. ');

		echo $main_block->toHtml();
	}

	public function index9Action()  {
		$block_1 = new Mage_Core_Block_Text();
		$block_1->setText('Original Text');

		$block_2 = new Mage_Core_Block_Text();
		$block_2->setText('The second sentence. ');

		$main_block = new Taras_NoFrills_Block_Helloworld();
		$main_block->setTemplate('taras/nofrills/helloworld3.phtml');

		$main_block->setChild('the_first', $block_1);
		$main_block->setChild('the_second', $block_2);

		$block_1->setText('Wait, I want this text instead. ');

		echo $main_block->toHtml();
	}

	public function index10Action()  {
		$block_1 = new Mage_Core_Block_Text();
		$block_1->setText('Original Text');

		$block_2 = new Mage_Core_Block_Text();
		$block_2->setText('The second sentence. ');

		$main_block = new Taras_NoFrills_Block_Helloworld();
//		$main_block->setTemplate('taras/nofrills/helloworld3.phtml');

		$main_block->setChild('the_first', $block_1);
		$main_block->setChild('the_second', $block_2);

		$block_1->setText('Wait, I want this text instead. ');

		echo $main_block->toHtml();
	}

	public function helloblockAction()
	{
		$main_block = new Taras_NoFrills_Block_Helloworld();
		echo $main_block->toHtml();
	}
}