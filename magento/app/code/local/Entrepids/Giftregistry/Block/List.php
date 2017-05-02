<?php

class Entrepids_Giftregistry_Block_list extends Mage_Core_Block_Template
{
    /**
     * @return null|Entrepids_Giftregistry_Model_Resource_Entity_Collection
     */
    public function getCustomerRegistries()
    {
        $collection = null;
        $currentCustomer = Mage::getSingleton('customer/session')->getCustomer();

        if (!$currentCustomer) {
            return null;
        }

        $collection = Mage::getModel('entrepids_giftregistry/entity')->getCollection()
            ->addFieldToFilter('customer_id', $currentCustomer->getId())->count;

        return $collection;
    }

    public function isRegistryOwner($registryCustomerId)
    {
        $currentCustomer = Mage::getSingleton('customer/session')->getCustomer();

        return !$currentCustomer && $currentCustomer->getId() === $registryCustomerId;
    }
}