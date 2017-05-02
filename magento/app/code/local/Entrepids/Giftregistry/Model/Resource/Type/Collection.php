<?php

class Entrepids_Giftregistry_Model_Resource_Type_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
    public function __construct($resource = null)
    {
        parent::__construct($resource);
        // Set the model and resource associated to this collection.
        $this->_init('entrepids_giftregistry/type');
    }
}