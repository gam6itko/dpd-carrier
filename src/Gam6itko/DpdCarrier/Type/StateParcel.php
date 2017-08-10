<?php
namespace Gam6itko\DpdCarrier\Type;

class StateParcel
{
    /** @var string */
    protected $clientOrderNr;

    /** @var string */
    protected $clientParcelNr;

    /** @var string */
    protected $dpdOrderNr;
    /** @var string */
    protected $dpdParcelNr;

    /** @var string - date */
    protected $pickupDate;

    /** @var string */
    protected $dpdOrderReNr;

    /** @var string */
    protected $dpdParcelReNr;

    /** @var bool */
    protected $isReturn;

    /** @var string - date */
    protected $planDeliveryDate;

    /** @var float */
    protected $orderPhysicalWeight;

    /** @var float */
    protected $orderVolume;

    /** @var float */
    protected $orderVolumeWeight;

    /** @var float */
    protected $orderPayWeight;

    /** @var float */
    protected $orderCost;

    /** @var float */
    protected $parcelPhysicalWeight;

    /** @var float */
    protected $parcelVolume;

    /** @var float */
    protected $parcelVolumeWeight;

    /** @var float */
    protected $parcelPayWeight;

    /** @var float */
    protected $parcelLength;

    /** @var float */
    protected $parcelWidth;

    /** @var float */
    protected $parcelHeight;

    /** @var string */
    protected $newState;

    /** @var string DATE_ATOM */
    protected $transitionTime;

    /** @var string */
    protected $terminalCode;

    /** @var string */
    protected $terminalCity;

    /** @var string */
    protected $incidentCode;

    /** @var string */
    protected $incidentName;

    /** @var string */
    protected $consignee;

    /**
     * @return string
     */
    public function getClientOrderNr()
    {
        return $this->clientOrderNr;
    }

    /**
     * @param string $clientOrderNr
     * @return StateParcel
     */
    public function setClientOrderNr($clientOrderNr)
    {
        $this->clientOrderNr = $clientOrderNr;
        return $this;
    }

    /**
     * @return string
     */
    public function getClientParcelNr()
    {
        return $this->clientParcelNr;
    }

    /**
     * @param string $clientParcelNr
     * @return StateParcel
     */
    public function setClientParcelNr($clientParcelNr)
    {
        $this->clientParcelNr = $clientParcelNr;
        return $this;
    }

    /**
     * @return string
     */
    public function getDpdOrderNr()
    {
        return $this->dpdOrderNr;
    }

    /**
     * @param string $dpdOrderNr
     * @return StateParcel
     */
    public function setDpdOrderNr($dpdOrderNr)
    {
        $this->dpdOrderNr = $dpdOrderNr;
        return $this;
    }

    /**
     * @return string
     */
    public function getDpdParcelNr()
    {
        return $this->dpdParcelNr;
    }

    /**
     * @param string $dpdParcelNr
     * @return StateParcel
     */
    public function setDpdParcelNr($dpdParcelNr)
    {
        $this->dpdParcelNr = $dpdParcelNr;
        return $this;
    }

    /**
     * @return string
     */
    public function getPickupDate()
    {
        return $this->pickupDate;
    }

    /**
     * @param string $pickupDate
     * @return StateParcel
     */
    public function setPickupDate($pickupDate)
    {
        $this->pickupDate = $pickupDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getDpdOrderReNr()
    {
        return $this->dpdOrderReNr;
    }

    /**
     * @param string $dpdOrderReNr
     * @return StateParcel
     */
    public function setDpdOrderReNr($dpdOrderReNr)
    {
        $this->dpdOrderReNr = $dpdOrderReNr;
        return $this;
    }

    /**
     * @return string
     */
    public function getDpdParcelReNr()
    {
        return $this->dpdParcelReNr;
    }

    /**
     * @param string $dpdParcelReNr
     * @return StateParcel
     */
    public function setDpdParcelReNr($dpdParcelReNr)
    {
        $this->dpdParcelReNr = $dpdParcelReNr;
        return $this;
    }

    /**
     * @return bool
     */
    public function isReturn()
    {
        return $this->isReturn;
    }

    /**
     * @param bool $isReturn
     * @return StateParcel
     */
    public function setIsReturn($isReturn)
    {
        $this->isReturn = $isReturn;
        return $this;
    }

    /**
     * @return string
     */
    public function getPlanDeliveryDate()
    {
        return $this->planDeliveryDate;
    }

    /**
     * @param string $planDeliveryDate
     * @return StateParcel
     */
    public function setPlanDeliveryDate($planDeliveryDate)
    {
        $this->planDeliveryDate = $planDeliveryDate;
        return $this;
    }

    /**
     * @return float
     */
    public function getOrderPhysicalWeight()
    {
        return $this->orderPhysicalWeight;
    }

    /**
     * @param float $orderPhysicalWeight
     * @return StateParcel
     */
    public function setOrderPhysicalWeight($orderPhysicalWeight)
    {
        $this->orderPhysicalWeight = $orderPhysicalWeight;
        return $this;
    }

    /**
     * @return float
     */
    public function getOrderVolume()
    {
        return $this->orderVolume;
    }

    /**
     * @param float $orderVolume
     * @return StateParcel
     */
    public function setOrderVolume($orderVolume)
    {
        $this->orderVolume = $orderVolume;
        return $this;
    }

    /**
     * @return float
     */
    public function getOrderVolumeWeight()
    {
        return $this->orderVolumeWeight;
    }

    /**
     * @param float $orderVolumeWeight
     * @return StateParcel
     */
    public function setOrderVolumeWeight($orderVolumeWeight)
    {
        $this->orderVolumeWeight = $orderVolumeWeight;
        return $this;
    }

    /**
     * @return float
     */
    public function getOrderPayWeight()
    {
        return $this->orderPayWeight;
    }

    /**
     * @param float $orderPayWeight
     * @return StateParcel
     */
    public function setOrderPayWeight($orderPayWeight)
    {
        $this->orderPayWeight = $orderPayWeight;
        return $this;
    }

    /**
     * @return float
     */
    public function getOrderCost()
    {
        return $this->orderCost;
    }

    /**
     * @param float $orderCost
     * @return StateParcel
     */
    public function setOrderCost($orderCost)
    {
        $this->orderCost = $orderCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getParcelPhysicalWeight()
    {
        return $this->parcelPhysicalWeight;
    }

    /**
     * @param float $parcelPhysicalWeight
     * @return StateParcel
     */
    public function setParcelPhysicalWeight($parcelPhysicalWeight)
    {
        $this->parcelPhysicalWeight = $parcelPhysicalWeight;
        return $this;
    }

    /**
     * @return float
     */
    public function getParcelVolume()
    {
        return $this->parcelVolume;
    }

    /**
     * @param float $parcelVolume
     * @return StateParcel
     */
    public function setParcelVolume($parcelVolume)
    {
        $this->parcelVolume = $parcelVolume;
        return $this;
    }

    /**
     * @return float
     */
    public function getParcelVolumeWeight()
    {
        return $this->parcelVolumeWeight;
    }

    /**
     * @param float $parcelVolumeWeight
     * @return StateParcel
     */
    public function setParcelVolumeWeight($parcelVolumeWeight)
    {
        $this->parcelVolumeWeight = $parcelVolumeWeight;
        return $this;
    }

    /**
     * @return float
     */
    public function getParcelPayWeight()
    {
        return $this->parcelPayWeight;
    }

    /**
     * @param float $parcelPayWeight
     * @return StateParcel
     */
    public function setParcelPayWeight($parcelPayWeight)
    {
        $this->parcelPayWeight = $parcelPayWeight;
        return $this;
    }

    /**
     * @return float
     */
    public function getParcelLength()
    {
        return $this->parcelLength;
    }

    /**
     * @param float $parcelLength
     * @return StateParcel
     */
    public function setParcelLength($parcelLength)
    {
        $this->parcelLength = $parcelLength;
        return $this;
    }

    /**
     * @return float
     */
    public function getParcelWidth()
    {
        return $this->parcelWidth;
    }

    /**
     * @param float $parcelWidth
     * @return StateParcel
     */
    public function setParcelWidth($parcelWidth)
    {
        $this->parcelWidth = $parcelWidth;
        return $this;
    }

    /**
     * @return float
     */
    public function getParcelHeight()
    {
        return $this->parcelHeight;
    }

    /**
     * @param float $parcelHeight
     * @return StateParcel
     */
    public function setParcelHeight($parcelHeight)
    {
        $this->parcelHeight = $parcelHeight;
        return $this;
    }

    /**
     * @return string
     */
    public function getNewState()
    {
        return $this->newState;
    }

    /**
     * @param string $newState
     * @return StateParcel
     */
    public function setNewState($newState)
    {
        $this->newState = $newState;
        return $this;
    }

    /**
     * @return string
     */
    public function getTransitionTime()
    {
        return $this->transitionTime;
    }

    /**
     * @param string $transitionTime
     * @return StateParcel
     */
    public function setTransitionTime($transitionTime)
    {
        $this->transitionTime = $transitionTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getTerminalCode()
    {
        return $this->terminalCode;
    }

    /**
     * @param string $terminalCode
     * @return StateParcel
     */
    public function setTerminalCode($terminalCode)
    {
        $this->terminalCode = $terminalCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getTerminalCity()
    {
        return $this->terminalCity;
    }

    /**
     * @param string $terminalCity
     * @return StateParcel
     */
    public function setTerminalCity($terminalCity)
    {
        $this->terminalCity = $terminalCity;
        return $this;
    }

    /**
     * @return string
     */
    public function getIncidentCode()
    {
        return $this->incidentCode;
    }

    /**
     * @param string $incidentCode
     * @return StateParcel
     */
    public function setIncidentCode($incidentCode)
    {
        $this->incidentCode = $incidentCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getIncidentName()
    {
        return $this->incidentName;
    }

    /**
     * @param string $incidentName
     * @return StateParcel
     */
    public function setIncidentName($incidentName)
    {
        $this->incidentName = $incidentName;
        return $this;
    }

    /**
     * @return string
     */
    public function getConsignee()
    {
        return $this->consignee;
    }

    /**
     * @param string $consignee
     * @return StateParcel
     */
    public function setConsignee($consignee)
    {
        $this->consignee = $consignee;
        return $this;
    }
}