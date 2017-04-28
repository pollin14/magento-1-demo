<?php

class Entrepids_Giftregistry_IndexController extends Mage_Core_Controller_Front_Action
{
    /**
     * It is executed before of the action.
     *
     * @return Mage_Core_Controller_Front_Action
     */
    public function preDispatch()
    {
        parent::preDispatch();

        if (!Mage::getSingleton('customer/session')->authenticate($this)) {
            $this->getResponse()->setRedirect(
                Mage::helper('customer')->getLoginUrl()
            );

            $this->setFlag('', self::FLAG_NO_DISPATCH, true);
        }
    }

    public function indexAction()
    {
        $this->loadLayout();
        $this->renderLayout();
        return $this;
    }

    public function deleteAction()
    {
        $registryId = $this->getRequest()->getParam('registry_id');
        if(!$registryId) {
            Mage::getSingleton('core/session')->addError("There was a problem deleting the registry");
            $this->_redirect('*/*/');
            return;
        }

        $registry = Mage::getModel('entrepids_giftregistry/entity')->load($registryId);

        if (!$registry) {
            Mage::getSingleton('core/session')->addError("There was a problem deleting the registry");
            $this->_redirect('*/*/');
            return;
        }

        $registry->delete();
        $successMessage =  Mage::helper('entrepids_giftregistry')->__('Gift registry has been succesfully deleted.');
        Mage::getSingleton('core/session')->addSuccess($successMessage);
        $this->_redirect('*/*/');
    }

    public function newAction()
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

    public function newPostAction()
    {
        $data = $this->getRequest()->getParams();

        if (!$this->getRequest()->getPost() || empty($data)) {
            Mage::getSingleton('core/session')->addError('Insufficient Data provided');
            $this->_redirect('*/*/');
        }

        $registry = Mage::getModel('entrepids_giftregistry/entity');
        $customer = Mage::getSingleton('customer/session')->getCustomer();
        $registry->updateRegistryData($customer, $data);
        $registry->save();
        $successMessage =  Mage::helper('entrepids_giftregistry')->__('Registry Successfully Created');
        Mage::getSingleton('core/session')->addSuccess($successMessage);

        $this->_redirect('*/*/');
    }

    public function editPostAction()
    {
        $data = $this->getRequest()->getParams();

        if (!$this->getRequest()->getPost() || empty($data)) {
            Mage::getSingleton('core/session')->addError("Insufficient Data provided");
            return $this->_redirect('*/*/');
        }

        $registry = Mage::getModel('entrepids_giftregistry/entity');
        $registry->load($data['registry_id']);

        if (!$registry) {
            Mage::getSingleton('core/session')->addError("Invalid Registry Specified");
            return $this->_redirect('*/*/');
        }

        $customer = Mage::getSingleton('customer/session')->getCustomer();

        $registry->updateRegistryData($customer, $data);
        $registry->save();
        $successMessage =  Mage::helper('entrepids_giftregistry')->__('Registry Successfully Saved');
        Mage::getSingleton('core/session')->addSuccess($successMessage);

        $this->_redirect('*/*/');
    }
}