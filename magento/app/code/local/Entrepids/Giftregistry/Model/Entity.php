<?php
class Entrepids_Giftregistry_Model_Entity extends Mage_Core_Model_Abstract
{
	public function __construct()
	{
        $this->_init('entrepids_giftregistry/entity');
        parent::__construct();
    }

    public function updateRegistryData(Mage_Customer_Model_Customer $customer, $data)
    {
        if (empty($data)) {
            Mage::log("Error Processing Request: Insufficient Data Provided", Zend_Log::ERR);
        }

        $this->setCustomerId($customer->getId());
        $this->setWebsiteId($customer->getWebsiteId());
        $this->setTypeId($data['type_id']);
        $this->setEventName($data['event_name']);
        $this->setEventDate($data['event_date']);
        $this->setEventCountry($data['event_country']);
        $this->setEventLocation($data['event_location']);

        return $this;
    }
}
