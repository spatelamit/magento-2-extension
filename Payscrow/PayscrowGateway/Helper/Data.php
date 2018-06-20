<?php
/**
 * Created by Byteworks Limited.
 * Author: Chibuzor Ogbu
 * Date: 02/07/2017
 * Time: 6:04 AM
 */

namespace Payscrow\PayscrowGateway\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\App\Helper\Context;
use Magento\Store\Model\StoreManager;
use Magento\Store\Model\ScopeInterface;
class Data extends AbstractHelper
{
	public function __construct(
        Context $context,
        StoreManager $storeManager,
        ScopeConfigInterface $scopeConfig
    )
    {
        $this->_scopeConfig = $scopeConfig;
        $this->_storeManager = $storeManager;
        parent::__construct($context);
    }
	public function getConfigValue($identifier)
    {
        return $this->_scopeConfig->getValue(
            $identifier,
            ScopeInterface::SCOPE_STORE
        );
    }
}