<?php

class Entrepids_Giftregistry_Helper_Data extends Mage_Core_Helper_Abstract
{
    public function getEventTypes()
    {
        $eventTypes = Mage::getModel('entrepids_giftregistry/type')->getCollection();

        return $eventTypes;
    }
}