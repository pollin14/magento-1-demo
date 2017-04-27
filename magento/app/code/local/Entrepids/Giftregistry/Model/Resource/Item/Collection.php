<?php

class Entrepids_Giftregistry_Model_Resource_Item_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
    public function _construct()
    {
        $this->_init('entrepids_giftregistry/item');
        parent::_construct();
    }
}
