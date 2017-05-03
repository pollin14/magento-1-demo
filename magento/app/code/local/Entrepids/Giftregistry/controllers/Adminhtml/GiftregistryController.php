<?php

class Entrepids_Giftregistry_Adminhtml_GiftregistryController extends Mage_Adminhtml_Controller_Action
{
    public function indexAction()
    {
        $this->loadLayout();
        $this->renderLayout();
        return $this;

    }

    public function editAction()
    {
        $this->loadLayout();
        $this->renderLayout();
        return $this;
    }

    public function saveAction()
    {
        $this->loadLayout();
        $this->renderLayout();
        return $this;
    }

    public function newAction()
    {
        $this->loadLayout();
        $this->renderLayout();
        return $this;
    }

    public function massDeleteAction()
    {
        $registryIds = $this->getRequest()->getParam('registries');
        if (!is_array($registryIds)) {
            Mage::getSingleton('adminhtml/session')->
            addError(Mage::helper('entrepids_giftregistry')->__('Please select one or more registries.'));
        } else {
            try {

                foreach ($registryIds as $registryId) {
                    $registry = Mage::getModel('entrepids_giftregistry/entity');
                    $registry->load($registryId)
                        ->delete();
                }

                Mage::getSingleton('adminhtml/session')->addSuccess(
                    Mage::helper('adminhtml')->__('Total of %d record(s) were deleted.', count($registryIds))
                );
            } catch (Exception $e) {
                Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
            }
        }

        $this->_redirect('*/*/index');
        return $this;
    }
}