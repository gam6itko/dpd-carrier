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

    /** @var bool */
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
     * @return Order
     */
    public function addExtraService(ExtraService $extraService)
    {
        $this->extraService[] = $extraService;

        return $this;
    }

    /**
     * @return self
     */
    public function addParcel(Parcel $parcel)
    {
        $this->parcel[] = $parcel;

        return $this;
    }

    public function getOrderNumberInternal(): ?string
    {
        return $this->orderNumberInternal;
    }

    public function setOrderNumberInternal(?string $orderNumberInternal): Order
    {
        $this->orderNumberInternal = $orderNumberInternal;

        return $this;
    }

    public function getServiceCode(): ?string
    {
        return $this->serviceCode;
    }

    public function setServiceCode(?string $serviceCode): Order
    {
        $this->serviceCode = $serviceCode;

        return $this;
    }

    public function getServiceVariant(): ?string
    {
        return $this->serviceVariant;
    }

    public function setServiceVariant(?string $serviceVariant): Order
    {
        $this->serviceVariant = $serviceVariant;

        return $this;
    }

    public function getCargoNumPack(): ?int
    {
        return $this->cargoNumPack;
    }

    public function setCargoNumPack(?int $cargoNumPack): Order
    {
        $this->cargoNumPack = $cargoNumPack;

        return $this;
    }

    public function getCargoWeight(): ?float
    {
        return $this->cargoWeight;
    }

    public function setCargoWeight(?float $cargoWeight): Order
    {
        $this->cargoWeight = $cargoWeight;

        return $this;
    }

    public function getCargoVolume(): ?float
    {
        return $this->cargoVolume;
    }

    public function setCargoVolume(?float $cargoVolume): Order
    {
        $this->cargoVolume = $cargoVolume;

        return $this;
    }

    public function isCargoRegistered(): bool
    {
        return $this->cargoRegistered ?? false;
    }

    public function setCargoRegistered(?bool $cargoRegistered): Order
    {
        $this->cargoRegistered = $cargoRegistered;

        return $this;
    }

    public function getCargoValue(): ?float
    {
        return $this->cargoValue;
    }

    public function setCargoValue(?float $cargoValue): Order
    {
        $this->cargoValue = $cargoValue;

        return $this;
    }

    public function getCargoCategory(): ?string
    {
        return $this->cargoCategory;
    }

    public function setCargoCategory(?string $cargoCategory): Order
    {
        $this->cargoCategory = $cargoCategory;

        return $this;
    }

    public function getDeliveryTimePeriod(): ?string
    {
        return $this->deliveryTimePeriod;
    }

    public function setDeliveryTimePeriod(?string $deliveryTimePeriod): Order
    {
        $this->deliveryTimePeriod = $deliveryTimePeriod;

        return $this;
    }

    public function getPaymentType(): ?string
    {
        return $this->paymentType;
    }

    public function setPaymentType(?string $paymentType): Order
    {
        $this->paymentType = $paymentType;

        return $this;
    }

    public function getExtraParam(): ?Parameter
    {
        return $this->extraParam;
    }

    public function setExtraParam(?Parameter $extraParam): Order
    {
        $this->extraParam = $extraParam;

        return $this;
    }

    public function getDataInt(): ?DataInternational
    {
        return $this->dataInt;
    }

    public function setDataInt(?DataInternational $dataInt): Order
    {
        $this->dataInt = $dataInt;

        return $this;
    }

    public function getReceiverAddress(): ?ClientAddress
    {
        return $this->receiverAddress;
    }

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
     */
    public function setParcel(?array $parcel): Order
    {
        $this->parcel = $parcel;

        return $this;
    }

    public function getUnitLoad(): ?UnitLoad
    {
        return $this->unitLoad;
    }

    public function setUnitLoad(?UnitLoad $unitLoad): Order
    {
        $this->unitLoad = $unitLoad;

        return $this;
    }
}
