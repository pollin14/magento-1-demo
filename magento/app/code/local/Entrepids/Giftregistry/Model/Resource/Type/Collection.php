<?php

class Entrepids_Giftregistry_Model_Resource_Type_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    public function _construct()
    {
        $this->_init('entrepids_giftregistry/type');
        parent::_construct();
    }
}