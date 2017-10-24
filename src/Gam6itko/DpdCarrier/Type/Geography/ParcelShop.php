<?php
namespace Gam6itko\DpdCarrier\Type\Geography;

class ParcelShop extends AbstractParcelStore
{
    /** @var string */
    protected $code;

    /** @var string */
    protected $parcelShopType;

    /** @var string */
    protected $state;

    /** @var Limits */
    protected $limits;

    /** @var string */
    protected $brand;

    /** @var string */
    protected $clientDepartmentNum;

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     * @return ParcelShop
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return string
     */
    public function getParcelShopType()
    {
        return $this->parcelShopType;
    }

    /**
     * @param string $parcelShopType
     * @return ParcelShop
     */
    public function setParcelShopType($parcelShopType)
    {
        $this->parcelShopType = $parcelShopType;
        return $this;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param string $state
     * @return ParcelShop
     */
    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }

    /**
     * @return Limits
     */
    public function getLimits()
    {
        return $this->limits;
    }

    /**
     * @param Limits $limits
     * @return ParcelShop
     */
    public function setLimits($limits)
    {
        $this->limits = $limits;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @param mixed $brand
     * @return ParcelShop
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;
        return $this;
    }
}
