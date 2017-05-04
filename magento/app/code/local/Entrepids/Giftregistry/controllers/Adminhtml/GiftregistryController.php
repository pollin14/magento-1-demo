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
        $id = $this->getRequest()->getParam('id', null);
        $registry = Mage::getModel('entrepids_giftregistry/entity');

        if ($id) {
            $registry->load((int) $id);

            if (!$registry->getId()) {
                Mage::getSingleton('adminhtml/session')
                    ->addError(Mage::helper('awesome')->__('The Gift Registry does not exist'));
                $this->_redirect('*/*/');
                return $this;
            }

            $data = Mage::getSingleton('adminhtml/session')->getFormData(true);
            if ($data) {
                $registry->setData($data)->setId($id);
            }
        }

        Mage::register('registry_data', $registry);

        $this->loadLayout();
        $this->getLayout()->getBlock('head')->setCanLoadExtJs(true);
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