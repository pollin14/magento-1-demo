<?php

class Entrepids_Giftregistry_Block_Adminhtml_Registries_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    public function __construct()
    {
        parent::__construct();
        $this->_objectId = 'id';

        // The form container requires these three variables to load the edit form block.
        // It generates a block name with this variables as in the config files.
        $this->_blockGroup = 'entrepids_giftregistry'; // module name
        $this->_controller = 'adminhtml_registries'; // from Block directory, path to the form
        $this->_mode = 'edit';

        $this->_updateButton('save', 'label', Mage::helper('entrepids_giftregistry')->__('Save Registry'));
        $this->_updateButton('delete', 'label', Mage::helper('entrepids_giftregistry')->__('Delete Registry'));
    }

    public function getHeaderText()
    {
        if (Mage::registry('registry_data') &&
            Mage::registry('registry_data')->getId()
        ) {
            return Mage::helper('entrepids_giftregistry')->__(
                "Edit Registry %s ",
                $this->escapeHtml(Mage::registry('registry_data')->getEventName())
            );
        }
        
        return Mage::helper('entrepids_giftregistry')->__('Add Registry');
    }
}