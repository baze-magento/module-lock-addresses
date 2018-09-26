<?php
namespace Baze\LockAddresses\Model\Customer;

use \Magento\Framework\App\Helper\AbstractHelper;
use \Magento\Checkout\Model\ConfigProviderInterface;
  
class AddressBookConfigProvider extends AbstractHelper implements ConfigProviderInterface
{
    public function getConfig()
    {
        $config = [
            'addressBookAccess' => $this->scopeConfig->getValue('customer/address/address_book_access', \Magento\Store\Model\ScopeInterface::SCOPE_STORE),
            'addressBookEditable' => $this->scopeConfig->getValue('customer/address/address_book_editable', \Magento\Store\Model\ScopeInterface::SCOPE_STORE)
        ];
        return $config;
    }
}
