<?php

class Entrepids_Giftregistry_Block_Adminhtml_Registries extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
        $this->_controller = 'adminhtml_registries'; // block class name of the grid widget
        $this->_blockGroup = 'entrepids_giftregistry'; // module name
        $this->_headerText = Mage::helper('entrepids_giftregistry')->__('Gift Registry Manager');
        parent::__construct();
    }
}