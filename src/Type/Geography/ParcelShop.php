<?php

namespace Gam6itko\DpdCarrier\Type\Geography;

class ParcelShop extends AbstractParcelStore
{
    /** @var string|null */
    protected $code;

    /** @var string|null */
    protected $parcelShopType;

    /** @var string|null */
    protected $state;

    /** @var Limits|null */
    protected $limits;

    /** @var string|null */
    protected $brand;

    /** @var string|null */
    protected $clientDepartmentNum;

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function getParcelShopType(): ?string
    {
        return $this->parcelShopType;
    }

    public function setParcelShopType(?string $parcelShopType): ParcelShop
    {
        $this->parcelShopType = $parcelShopType;

        return $this;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setState(?string $state): ParcelShop
    {
        $this->state = $state;

        return $this;
    }

    public function getLimits(): ?Limits
    {
        return $this->limits;
    }

    public function setLimits(?Limits $limits): ParcelShop
    {
        $this->limits = $limits;

        return $this;
    }

    public function getBrand(): ?string
    {
        return $this->brand;
    }

    public function setBrand(?string $brand): ParcelShop
    {
        $this->brand = $brand;

        return $this;
    }

    public function getClientDepartmentNum(): ?string
    {
        return $this->clientDepartmentNum;
    }

    public function setClientDepartmentNum(?string $clientDepartmentNum): ParcelShop
    {
        $this->clientDepartmentNum = $clientDepartmentNum;

        return $this;
    }
}
