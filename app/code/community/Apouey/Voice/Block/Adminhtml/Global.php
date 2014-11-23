<?php

class Apouey_Voice_Block_Adminhtml_Global extends Mage_Adminhtml_Block_Template
{
	public function __construct()
    {
        parent::__construct();
        $this->setTemplate('voice/global.phtml');
    }

	protected function getAdminLocale()
	{
		return Mage::app()->getLocale()->getLocaleCode();
	}

	protected function getDebugFlag()
	{
		return Mage::getStoreConfig('voice/debug') ? 'true' : 'false';
	}
}