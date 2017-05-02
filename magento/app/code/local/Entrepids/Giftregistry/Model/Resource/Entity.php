<?php

class Entrepids_Giftregistry_Model_Resource_Entity extends Mage_Core_Model_Resource_Db_Abstract
{
    protected function _construct()
    {
        $this->_init('entrepids_giftregistry/entity', 'entity_id');
    }
}