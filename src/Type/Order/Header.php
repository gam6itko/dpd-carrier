<?php

namespace Gam6itko\DpdCarrier\Type\Order;

use Gam6itko\DpdCarrier\Type\ArrayLike;

class Header extends ArrayLike
{
    /** @var string|null */
    protected $datePickup;

    /** @var float|null */
    protected $payer;

    /** @var ClientAddress|null */
    protected $senderAddress;

    /** @var string|null */
    protected $pickupTimePeriod;

    /** @var string|null */
    protected $regularNum;

    /**
     * @return string|null
     */
    public function getDatePickup(): ?string
    {
        return $this->datePickup;
    }

    /**
     * @param string|null $datePickup
     *
     * @return Header
     */
    public function setDatePickup(?string $datePickup): Header
    {
        $this->datePickup = $datePickup;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getPayer(): ?float
    {
        return $this->payer;
    }

    /**
     * @param float|null $payer
     *
     * @return Header
     */
    public function setPayer(?float $payer): Header
    {
        $this->payer = $payer;
        return $this;
    }

    /**
     * @return ClientAddress|null
     */
    public function getSenderAddress(): ?ClientAddress
    {
        return $this->senderAddress;
    }

    /**
     * @param ClientAddress|null $senderAddress
     *
     * @return Header
     */
    public function setSenderAddress(?ClientAddress $senderAddress): Header
    {
        $this->senderAddress = $senderAddress;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPickupTimePeriod(): ?string
    {
        return $this->pickupTimePeriod;
    }

    /**
     * @param string|null $pickupTimePeriod
     *
     * @return Header
     */
    public function setPickupTimePeriod(?string $pickupTimePeriod): Header
    {
        $this->pickupTimePeriod = $pickupTimePeriod;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getRegularNum(): ?string
    {
        return $this->regularNum;
    }

    /**
     * @param string|null $regularNum
     *
     * @return Header
     */
    public function setRegularNum(?string $regularNum): Header
    {
        $this->regularNum = $regularNum;
        return $this;
    }

}
