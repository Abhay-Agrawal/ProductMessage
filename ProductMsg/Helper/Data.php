<?php
namespace Abhay\ProductMsg\Helper;

use \Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

class Data extends AbstractHelper
{
    const CONFIG_PATH_MODULE_ENABLED = 'productmsg/general/enable';
    const CONFIG_PATH_IMG_MSG = 'productmsg/general/img_msg';
    public $scopeConfig;

    public function __construct(
        \Magento\Framework\App\Helper\Context $context,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
    ) {
        $this->scopeConfig = $context->getScopeConfig();
        parent::__construct($context);
    }
    public function isEnabled()
    {
        return (bool)$this->scopeConfig->getValue(self::CONFIG_PATH_MODULE_ENABLED);
    }
    public function ImgMsg()
    {
        return $this->scopeConfig->getValue(self::CONFIG_PATH_IMG_MSG);
    }

}
