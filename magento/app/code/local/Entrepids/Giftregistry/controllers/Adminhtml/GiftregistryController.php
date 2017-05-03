<?php

class Entrepids_Giftregistry_Adminhtml_GiftregistryController extends Mage_Adminhtml_Controller_Action
{
    public function indexAction()
    {
        echo Mage::app()->getLayout()->getXmlString();

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
        $this->loadLayout();
        $this->renderLayout();
        return $this;
    }
}