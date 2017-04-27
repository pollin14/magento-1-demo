<?php

class Entrepids_Giftregistry_Model_Resource_Item extends Mage_Core_Model_Resource_Db_Abstract
{
    public function _construct()
    {
        $this->_init('entrepids_giftregistry/item', 'item_id');
    }
}
