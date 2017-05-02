<?php

class Entrepids_Giftregistry_Model_Resource_Item_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
    public function __construct($resource = null)
    {
        parent::__construct($resource);
        $this->_init('entrepids_giftregistry/item');
    }
}
