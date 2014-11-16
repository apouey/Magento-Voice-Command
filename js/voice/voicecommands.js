if (annyang) {
	var goToCache = function () {
		window.location.href = '<?php echo Mage::helper("adminhtml")->getUrl("adminhtml/cache/index"); ?>';
	}

	var goToConfiguration = function () {
		window.location.href = '<?php echo Mage::helper("adminhtml")->getUrl("adminhtml/system_config/index"); ?>';
	}

	var goToProcess = function () {
		window.location.href = '<?php echo Mage::helper("adminhtml")->getUrl("adminhtml/process/list"); ?>';
	}

	var globalCommands = {
		'cache'	: goToCache,
		'configuration' : goToConfiguration,
		'index' : goToProcess,	
	};

	annyang.addCommands(globalCommands);
	annyang.setLanguage('en-US');
	annyang.start();
}	