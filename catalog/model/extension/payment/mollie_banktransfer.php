<?php
require_once(dirname(__FILE__) . "/mollie/base.php");

class ModelExtensionPaymentMollieBankTransfer extends ModelExtensionPaymentMollieBase
{
	const MODULE_NAME = MollieHelper::MODULE_NAME_BANKTRANSFER;
}
