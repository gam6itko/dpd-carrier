<?php
namespace Gam6itko\DpdCarrier\Type\Order;

class Header
{
    /** @var string */
    protected $datePickup;

    /** @var float */
    protected $payer;

    /** @var ClientAddress */
    protected $senderAddress;

    /** @var string */
    protected $pickupTimePeriod;

    /** @var string */
    protected $regularNum;

    /**
     * @return string
     */
    public function getDatePickup()
    {
        return $this->datePickup;
    }

    /**
     * @param string $datePickup
     * @return Header
     */
    public function setDatePickup($datePickup)
    {
        $this->datePickup = $datePickup;
        return $this;
    }

    /**
     * @return float
     */
    public function getPayer()
    {
        return $this->payer;
    }

    /**
     * @param float $payer
     * @return Header
     */
    public function setPayer($payer)
    {
        $this->payer = $payer;
        return $this;
    }

    /**
     * @return ClientAddress
     */
    public function getSenderAddress()
    {
        return $this->senderAddress;
    }

    /**
     * @param ClientAddress $senderAddress
     * @return Header
     */
    public function setSenderAddress($senderAddress)
    {
        $this->senderAddress = $senderAddress;
        return $this;
    }

    /**
     * @return string
     */
    public function getPickupTimePeriod()
    {
        return $this->pickupTimePeriod;
    }

    /**
     * @param string $pickupTimePeriod
     * @return Header
     */
    public function setPickupTimePeriod($pickupTimePeriod)
    {
        $this->pickupTimePeriod = $pickupTimePeriod;
        return $this;
    }

    /**
     * @return string
     */
    public function getRegularNum()
    {
        return $this->regularNum;
    }

    /**
     * @param string $regularNum
     * @return Header
     */
    public function setRegularNum($regularNum)
    {
        $this->regularNum = $regularNum;
        return $this;
    }
}
