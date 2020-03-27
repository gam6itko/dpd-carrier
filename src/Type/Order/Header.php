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

    public function getDatePickup(): ?string
    {
        return $this->datePickup;
    }

    public function setDatePickup(?string $datePickup): Header
    {
        $this->datePickup = $datePickup;

        return $this;
    }

    public function getPayer(): ?float
    {
        return $this->payer;
    }

    public function setPayer(?float $payer): Header
    {
        $this->payer = $payer;

        return $this;
    }

    public function getSenderAddress(): ?ClientAddress
    {
        return $this->senderAddress;
    }

    public function setSenderAddress(?ClientAddress $senderAddress): Header
    {
        $this->senderAddress = $senderAddress;

        return $this;
    }

    public function getPickupTimePeriod(): ?string
    {
        return $this->pickupTimePeriod;
    }

    public function setPickupTimePeriod(?string $pickupTimePeriod): Header
    {
        $this->pickupTimePeriod = $pickupTimePeriod;

        return $this;
    }

    public function getRegularNum(): ?string
    {
        return $this->regularNum;
    }

    public function setRegularNum(?string $regularNum): Header
    {
        $this->regularNum = $regularNum;

        return $this;
    }
}
