<?php

class Entrepids_Giftregistry_Model_Speedup
{
    public function optimize(Varien_Event_Observer $event)
    {
        Mage::log('Performance improved');
    }
}