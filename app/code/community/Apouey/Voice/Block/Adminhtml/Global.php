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
		return Mage::getStoreConfig('voice/global/debug') ? 'true' : 'false';
	}

	public function getUrl()
	{
		return array(
			'goToDashboard' 				=> 	Mage::helper("adminhtml")->getUrl("adminhtml/dashboard/index"),
			'goToCache' 					=> 	Mage::helper("adminhtml")->getUrl("adminhtml/cache/index"),
			'goToConfiguration' 			=>	Mage::helper("adminhtml")->getUrl("adminhtml/system_config/index"),
			'goToProcess'					=>	Mage::helper("adminhtml")->getUrl("adminhtml/process/list"),
			'goToProduct'					=>	Mage::helper("adminhtml")->getUrl("adminhtml/catalog_product/index"),
			'goToCategory' 					=>	Mage::helper("adminhtml")->getUrl("adminhtml/catalog_category/index"),
 			'goToCustomer'					=>	Mage::helper("adminhtml")->getUrl("adminhtml/customer/index"),
 			'goToOrder'						=>	Mage::helper("adminhtml")->getUrl("adminhtml/sales_order/index"),
 			'goToInvoice'					=>	Mage::helper("adminhtml")->getUrl("adminhtml/sales_invoice/index"),
 			'goToShipment'					=>	Mage::helper("adminhtml")->getUrl("adminhtml/sales_shipment/index"),
 			'goToCreditmemo'				=>	Mage::helper("adminhtml")->getUrl("adminhtml/sales_creditmemo/index"),
 			'goToCatalogPriceRules'			=>	Mage::helper("adminhtml")->getUrl("adminhtml/promo_catalog/index"),
 			'goToShoppingCartPriceRules' 	=>	Mage::helper("adminhtml")->getUrl("adminhtml/promo_quote/index"),
			);
	}

}