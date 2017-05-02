<?php

class Entrepids_Giftregistry_Model_Type extends Mage_Core_Model_Abstract
{
    public function __construct()
    {
        // Set the resource and collection associated to this model
        $this->_init('entrepids_giftregistry/type');
        parent::__construct();
    }
}