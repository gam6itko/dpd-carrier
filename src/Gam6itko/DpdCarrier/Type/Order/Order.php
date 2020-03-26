<?php

namespace Gam6itko\DpdCarrier\Type\Order;

use Gam6itko\DpdCarrier\Type\ArrayLike;
use Gam6itko\DpdCarrier\Type\ExtraService;
use Gam6itko\DpdCarrier\Type\Parameter;
use Gam6itko\DpdCarrier\Type\Parcel;

class Order extends ArrayLike
{
    /** @var string|null */
    protected $orderNumberInternal;

    /** @var string|null */
    protected $serviceCode;

    /** @var string|null */
    protected $serviceVariant;

    /** @var int|null */
    protected $cargoNumPack;

    /** @var float|null */
    protected $cargoWeight;

    /** @var float|null */
    protected $cargoVolume;

    /** @var bool|null */
    protected $cargoRegistered = false;

    /** @var float|null */
    protected $cargoValue;

    /** @var string|null */
    protected $cargoCategory;

    /** @var string|null */
    protected $deliveryTimePeriod;

    /** @var string|null */
    protected $paymentType;

    /** @var Parameter|null */
    protected $extraParam;

    /** @var DataInternational|null */
    protected $dataInt;

    /** @var ClientAddress|null */
    protected $receiverAddress;

    /** @var ExtraService[]|null */
    protected $extraService;

    /** @var Parcel[]|null */
    protected $parcel;

    /** @var UnitLoad|null */
    protected $unitLoad;

    /**
     * @return string|null
     */
    public function getOrderNumberInternal(): ?string
    {
        return $this->orderNumberInternal;
    }

    /**
     * @param string|null $orderNumberInternal
     *
     * @return Order
     */
    public function setOrderNumberInternal(?string $orderNumberInternal): Order
    {
        $this->orderNumberInternal = $orderNumberInternal;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getServiceCode(): ?string
    {
        return $this->serviceCode;
    }

    /**
     * @param string|null $serviceCode
     *
     * @return Order
     */
    public function setServiceCode(?string $serviceCode): Order
    {
        $this->serviceCode = $serviceCode;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getServiceVariant(): ?string
    {
        return $this->serviceVariant;
    }

    /**
     * @param string|null $serviceVariant
     *
     * @return Order
     */
    public function setServiceVariant(?string $serviceVariant): Order
    {
        $this->serviceVariant = $serviceVariant;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getCargoNumPack(): ?int
    {
        return $this->cargoNumPack;
    }

    /**
     * @param int|null $cargoNumPack
     *
     * @return Order
     */
    public function setCargoNumPack(?int $cargoNumPack): Order
    {
        $this->cargoNumPack = $cargoNumPack;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getCargoWeight(): ?float
    {
        return $this->cargoWeight;
    }

    /**
     * @param float|null $cargoWeight
     *
     * @return Order
     */
    public function setCargoWeight(?float $cargoWeight): Order
    {
        $this->cargoWeight = $cargoWeight;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getCargoVolume(): ?float
    {
        return $this->cargoVolume;
    }

    /**
     * @param float|null $cargoVolume
     *
     * @return Order
     */
    public function setCargoVolume(?float $cargoVolume): Order
    {
        $this->cargoVolume = $cargoVolume;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getCargoRegistered(): ?bool
    {
        return $this->cargoRegistered;
    }

    /**
     * @param bool|null $cargoRegistered
     *
     * @return Order
     */
    public function setCargoRegistered(?bool $cargoRegistered): Order
    {
        $this->cargoRegistered = $cargoRegistered;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getCargoValue(): ?float
    {
        return $this->cargoValue;
    }

    /**
     * @param float|null $cargoValue
     *
     * @return Order
     */
    public function setCargoValue(?float $cargoValue): Order
    {
        $this->cargoValue = $cargoValue;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCargoCategory(): ?string
    {
        return $this->cargoCategory;
    }

    /**
     * @param string|null $cargoCategory
     *
     * @return Order
     */
    public function setCargoCategory(?string $cargoCategory): Order
    {
        $this->cargoCategory = $cargoCategory;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDeliveryTimePeriod(): ?string
    {
        return $this->deliveryTimePeriod;
    }

    /**
     * @param string|null $deliveryTimePeriod
     *
     * @return Order
     */
    public function setDeliveryTimePeriod(?string $deliveryTimePeriod): Order
    {
        $this->deliveryTimePeriod = $deliveryTimePeriod;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPaymentType(): ?string
    {
        return $this->paymentType;
    }

    /**
     * @param string|null $paymentType
     *
     * @return Order
     */
    public function setPaymentType(?string $paymentType): Order
    {
        $this->paymentType = $paymentType;
        return $this;
    }

    /**
     * @return Parameter|null
     */
    public function getExtraParam(): ?Parameter
    {
        return $this->extraParam;
    }

    /**
     * @param Parameter|null $extraParam
     *
     * @return Order
     */
    public function setExtraParam(?Parameter $extraParam): Order
    {
        $this->extraParam = $extraParam;
        return $this;
    }

    /**
     * @return DataInternational|null
     */
    public function getDataInt(): ?DataInternational
    {
        return $this->dataInt;
    }

    /**
     * @param DataInternational|null $dataInt
     *
     * @return Order
     */
    public function setDataInt(?DataInternational $dataInt): Order
    {
        $this->dataInt = $dataInt;
        return $this;
    }

    /**
     * @return ClientAddress|null
     */
    public function getReceiverAddress(): ?ClientAddress
    {
        return $this->receiverAddress;
    }

    /**
     * @param ClientAddress|null $receiverAddress
     *
     * @return Order
     */
    public function setReceiverAddress(?ClientAddress $receiverAddress): Order
    {
        $this->receiverAddress = $receiverAddress;
        return $this;
    }

    /**
     * @return ExtraService[]|null
     */
    public function getExtraService(): ?array
    {
        return $this->extraService;
    }

    /**
     * @param ExtraService[]|null $extraService
     *
     * @return Order
     */
    public function setExtraService(?array $extraService): Order
    {
        $this->extraService = $extraService;
        return $this;
    }

    /**
     * @return Parcel[]|null
     */
    public function getParcel(): ?array
    {
        return $this->parcel;
    }

    /**
     * @param Parcel[]|null $parcel
     *
     * @return Order
     */
    public function setParcel(?array $parcel): Order
    {
        $this->parcel = $parcel;
        return $this;
    }

    /**
     * @return UnitLoad|null
     */
    public function getUnitLoad(): ?UnitLoad
    {
        return $this->unitLoad;
    }

    /**
     * @param UnitLoad|null $unitLoad
     *
     * @return Order
     */
    public function setUnitLoad(?UnitLoad $unitLoad): Order
    {
        $this->unitLoad = $unitLoad;
        return $this;
    }

}
