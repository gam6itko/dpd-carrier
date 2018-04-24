<?php
namespace Gam6itko\DpdCarrier\Type\Order;

use Gam6itko\DpdCarrier\Type\ExtraService;
use Gam6itko\DpdCarrier\Type\Parameter;
use Gam6itko\DpdCarrier\Type\Parcel;
use Gam6itko\DpdCarrier\Type\Traits\ToArrayTrait;

class Order implements \JsonSerializable
{
    use ToArrayTrait;

    /** @var string */
    protected $orderNumberInternal;

    /** @var string */
    protected $serviceCode;

    /** @var string */
    protected $serviceVariant;

    /** @var integer */
    protected $cargoNumPack;

    /** @var float */
    protected $cargoWeight;

    /** @var float */
    protected $cargoVolume;

    /** @var bool */
    protected $cargoRegistered = false;

    /** @var float */
    protected $cargoValue;

    /** @var string */
    protected $cargoCategory;

    /** @var string */
    protected $deliveryTimePeriod;

    /** @var string */
    protected $paymentType;

    /** @var Parameter */
    protected $extraParam;

    /** @var DataInternational */
    protected $dataInt;

    /** @var ClientAddress */
    protected $receiverAddress;

    /** @var ExtraService */
    protected $extraService;

    /** @var Parcel */
    protected $parcel;

    /** @var UnitLoad */
    protected $unitLoad;

    /**
     * @inheritdoc
     */
    public function jsonSerialize()
    {
        return $this->toArray();
    }

    /**
     * @return string
     */
    public function getOrderNumberInternal()
    {
        return $this->orderNumberInternal;
    }

    /**
     * @param string $orderNumberInternal
     * @return Order
     */
    public function setOrderNumberInternal($orderNumberInternal)
    {
        $this->orderNumberInternal = $orderNumberInternal;
        return $this;
    }

    /**
     * @return string
     */
    public function getServiceCode()
    {
        return $this->serviceCode;
    }

    /**
     * @param string $serviceCode
     * @return Order
     */
    public function setServiceCode($serviceCode)
    {
        $this->serviceCode = $serviceCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getServiceVariant()
    {
        return $this->serviceVariant;
    }

    /**
     * @param string $serviceVariant
     * @return Order
     */
    public function setServiceVariant($serviceVariant)
    {
        $this->serviceVariant = $serviceVariant;
        return $this;
    }

    /**
     * @return int
     */
    public function getCargoNumPack()
    {
        return $this->cargoNumPack;
    }

    /**
     * @param int $cargoNumPack
     * @return Order
     */
    public function setCargoNumPack($cargoNumPack)
    {
        $this->cargoNumPack = $cargoNumPack;
        return $this;
    }

    /**
     * @return float
     */
    public function getCargoWeight()
    {
        return $this->cargoWeight;
    }

    /**
     * @param float $cargoWeight
     * @return Order
     */
    public function setCargoWeight($cargoWeight)
    {
        $this->cargoWeight = $cargoWeight;
        return $this;
    }

    /**
     * @return float
     */
    public function getCargoVolume()
    {
        return $this->cargoVolume;
    }

    /**
     * @param float $cargoVolume
     * @return Order
     */
    public function setCargoVolume($cargoVolume)
    {
        $this->cargoVolume = $cargoVolume;
        return $this;
    }

    /**
     * @return bool
     */
    public function isCargoRegistered()
    {
        return $this->cargoRegistered;
    }

    /**
     * @param bool $cargoRegistered
     * @return Order
     */
    public function setCargoRegistered($cargoRegistered)
    {
        $this->cargoRegistered = $cargoRegistered;
        return $this;
    }

    /**
     * @return float
     */
    public function getCargoValue()
    {
        return $this->cargoValue;
    }

    /**
     * @param float $cargoValue
     * @return Order
     */
    public function setCargoValue($cargoValue)
    {
        $this->cargoValue = $cargoValue;
        return $this;
    }

    /**
     * @return string
     */
    public function getCargoCategory()
    {
        return $this->cargoCategory;
    }

    /**
     * @param string $cargoCategory
     * @return Order
     */
    public function setCargoCategory($cargoCategory)
    {
        $this->cargoCategory = $cargoCategory;
        return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryTimePeriod()
    {
        return $this->deliveryTimePeriod;
    }

    /**
     * @param string $deliveryTimePeriod
     * @return Order
     */
    public function setDeliveryTimePeriod($deliveryTimePeriod)
    {
        $this->deliveryTimePeriod = $deliveryTimePeriod;
        return $this;
    }

    /**
     * @return string
     */
    public function getPaymentType()
    {
        return $this->paymentType;
    }

    /**
     * @param string $paymentType
     * @return Order
     */
    public function setPaymentType($paymentType)
    {
        $this->paymentType = $paymentType;
        return $this;
    }

    /**
     * @return Parameter
     */
    public function getExtraParam()
    {
        return $this->extraParam;
    }

    /**
     * @param Parameter $extraParam
     * @return Order
     */
    public function setExtraParam($extraParam)
    {
        $this->extraParam = $extraParam;
        return $this;
    }

    /**
     * @return DataInternational
     */
    public function getDataInt()
    {
        return $this->dataInt;
    }

    /**
     * @param DataInternational $dataInt
     * @return Order
     */
    public function setDataInt($dataInt)
    {
        $this->dataInt = $dataInt;
        return $this;
    }

    /**
     * @return ClientAddress
     */
    public function getReceiverAddress()
    {
        return $this->receiverAddress;
    }

    /**
     * @param ClientAddress $receiverAddress
     * @return Order
     */
    public function setReceiverAddress($receiverAddress)
    {
        $this->receiverAddress = $receiverAddress;
        return $this;
    }

    /**
     * @return ExtraService
     */
    public function getExtraService()
    {
        return $this->extraService;
    }

    /**
     * @param ExtraService $extraService
     * @return Order
     */
    public function setExtraService($extraService)
    {
        $this->extraService = $extraService;
        return $this;
    }

    /**
     * @return Parcel
     */
    public function getParcel()
    {
        return $this->parcel;
    }

    /**
     * @param Parcel $parcel
     * @return Order
     */
    public function setParcel($parcel)
    {
        $this->parcel = $parcel;
        return $this;
    }

    /**
     * @return UnitLoad
     */
    public function getUnitLoad()
    {
        return $this->unitLoad;
    }

    /**
     * @param UnitLoad $unitLoad
     * @return Order
     */
    public function setUnitLoad($unitLoad)
    {
        $this->unitLoad = $unitLoad;
        return $this;
    }
}
