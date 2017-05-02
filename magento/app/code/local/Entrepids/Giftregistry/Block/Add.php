<?php

class Entrepids_Giftregistry_Block_Add extends Mage_Core_Block_Template
{
    public function getCustomerRegistryCollection()
    {
        $customer = Mage::getSingleton("customer/session")->getCustomer();

        if (!$customer) {
            return null;
        }

        $collection = Mage::getModel('entrepids_giftregistry/entity')->getCollection()
            ->addFieldToFilter('customer_id', $customer->getId());

        return $collection;
    }
}