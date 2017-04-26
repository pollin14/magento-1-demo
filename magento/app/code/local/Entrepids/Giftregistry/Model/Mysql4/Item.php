<?php

class Entrepids_Giftregistry_Model_Mysql4_Item extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {
        $this->_init('entrepids_giftregistry/item', 'item_id');
    }
}
