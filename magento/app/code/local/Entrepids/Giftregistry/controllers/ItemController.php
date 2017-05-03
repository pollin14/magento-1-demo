<?php

class Entrepids_Giftregistry_ItemController extends Mage_Core_Controller_Front_Action
{
    public function addAction()
    {
        if (!$this->getRequest()->getPost()) {
            $this->_redirectUrl($this->_getRefererUrl());
            Mage::getSingleton('core/session')->addError('Invalid http method');
            return $this;
        }

        $data = $this->getRequest()->getParams();

        if (empty($data)) {
            $this->_redirectUrl($this->_getRefererUrl());
            Mage::getSingleton('core/session')->addError('Insufficient data');
            return $this;
        }

        $entity = Mage::getModel('entrepids_giftregistry/item');
        $entity->setProductId($data['product_id']);
        $entity->setRegistryId($data['registry_id']);
        $entity->save();

        Mage::getSingleton('core/session')->addSuccess('Item added to the gift registry');

        $this->_redirectUrl($this->_getRefererUrl());
        return $this;
    }

    public function editAction()
    {
        return $this;
    }

    public function deleteAction()
    {
        return $this;
    }
}