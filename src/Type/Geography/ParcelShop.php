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

    /**
     * @return string|null
     */
    public function getParcelShopType(): ?string
    {
        return $this->parcelShopType;
    }

    /**
     * @param string|null $parcelShopType
     *
     * @return ParcelShop
     */
    public function setParcelShopType(?string $parcelShopType): ParcelShop
    {
        $this->parcelShopType = $parcelShopType;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getState(): ?string
    {
        return $this->state;
    }

    /**
     * @param string|null $state
     *
     * @return ParcelShop
     */
    public function setState(?string $state): ParcelShop
    {
        $this->state = $state;
        return $this;
    }

    /**
     * @return Limits|null
     */
    public function getLimits(): ?Limits
    {
        return $this->limits;
    }

    /**
     * @param Limits|null $limits
     *
     * @return ParcelShop
     */
    public function setLimits(?Limits $limits): ParcelShop
    {
        $this->limits = $limits;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getBrand(): ?string
    {
        return $this->brand;
    }

    /**
     * @param string|null $brand
     *
     * @return ParcelShop
     */
    public function setBrand(?string $brand): ParcelShop
    {
        $this->brand = $brand;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getClientDepartmentNum(): ?string
    {
        return $this->clientDepartmentNum;
    }

    /**
     * @param string|null $clientDepartmentNum
     *
     * @return ParcelShop
     */
    public function setClientDepartmentNum(?string $clientDepartmentNum): ParcelShop
    {
        $this->clientDepartmentNum = $clientDepartmentNum;
        return $this;
    }

}
