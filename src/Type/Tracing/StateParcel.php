<?php

namespace Gam6itko\DpdCarrier\Type\Tracing;

use Gam6itko\DpdCarrier\Type\Traits\ToArrayTrait;

class StateParcel
{
    use ToArrayTrait;

    /** @var string|null */
    protected $clientOrderNr;

    /** @var string|null */
    protected $clientParcelNr;

    /** @var string|null */
    protected $dpdOrderNr;

    /** @var string|null */
    protected $dpdParcelNr;

    /** @var string|null Date */
    protected $pickupDate;

    /** @var string|null */
    protected $dpdOrderReNr;

    /** @var string|null */
    protected $dpdParcelReNr;

    /** @var bool */
    protected $isReturn = false;

    /** @var string|null Date */
    protected $planDeliveryDate;

    /** @var float|null */
    protected $orderPhysicalWeight;

    /** @var float|null */
    protected $orderVolume;

    /** @var float|null */
    protected $orderVolumeWeight;

    /** @var float|null */
    protected $orderPayWeight;

    /** @var float|null */
    protected $orderCost;

    /** @var float|null */
    protected $parcelPhysicalWeight;

    /** @var float|null */
    protected $parcelVolume;

    /** @var float|null */
    protected $parcelVolumeWeight;

    /** @var float|null */
    protected $parcelPayWeight;

    /** @var float|null */
    protected $parcelLength;

    /** @var float|null */
    protected $parcelWidth;

    /** @var float|null */
    protected $parcelHeight;

    /** @var string|null */
    protected $newState;

    /** @var string|null DATE_ATOM */
    protected $transitionTime;

    /** @var string|null */
    protected $terminalCode;

    /** @var string|null */
    protected $terminalCity;

    /** @var string|null */
    protected $incidentCode;

    /** @var string|null */
    protected $incidentName;

    /** @var string|null */
    protected $consignee;

    /**
     * @return string|null
     */
    public function getClientOrderNr(): ?string
    {
        return $this->clientOrderNr;
    }

    /**
     * @param string|null $clientOrderNr
     *
     * @return StateParcel
     */
    public function setClientOrderNr(?string $clientOrderNr): StateParcel
    {
        $this->clientOrderNr = $clientOrderNr;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getClientParcelNr(): ?string
    {
        return $this->clientParcelNr;
    }

    /**
     * @param string|null $clientParcelNr
     *
     * @return StateParcel
     */
    public function setClientParcelNr(?string $clientParcelNr): StateParcel
    {
        $this->clientParcelNr = $clientParcelNr;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDpdOrderNr(): ?string
    {
        return $this->dpdOrderNr;
    }

    /**
     * @param string|null $dpdOrderNr
     *
     * @return StateParcel
     */
    public function setDpdOrderNr(?string $dpdOrderNr): StateParcel
    {
        $this->dpdOrderNr = $dpdOrderNr;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDpdParcelNr(): ?string
    {
        return $this->dpdParcelNr;
    }

    /**
     * @param string|null $dpdParcelNr
     *
     * @return StateParcel
     */
    public function setDpdParcelNr(?string $dpdParcelNr): StateParcel
    {
        $this->dpdParcelNr = $dpdParcelNr;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPickupDate(): ?string
    {
        return $this->pickupDate;
    }

    /**
     * @param string|null $pickupDate
     *
     * @return StateParcel
     */
    public function setPickupDate(?string $pickupDate): StateParcel
    {
        $this->pickupDate = $pickupDate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDpdOrderReNr(): ?string
    {
        return $this->dpdOrderReNr;
    }

    /**
     * @param string|null $dpdOrderReNr
     *
     * @return StateParcel
     */
    public function setDpdOrderReNr(?string $dpdOrderReNr): StateParcel
    {
        $this->dpdOrderReNr = $dpdOrderReNr;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDpdParcelReNr(): ?string
    {
        return $this->dpdParcelReNr;
    }

    /**
     * @param string|null $dpdParcelReNr
     *
     * @return StateParcel
     */
    public function setDpdParcelReNr(?string $dpdParcelReNr): StateParcel
    {
        $this->dpdParcelReNr = $dpdParcelReNr;
        return $this;
    }

    /**
     * @return bool
     */
    public function isReturn(): bool
    {
        return $this->isReturn ?? false;
    }

    /**
     * @param bool|null $isReturn
     *
     * @return StateParcel
     */
    public function setIsReturn(?bool $isReturn): StateParcel
    {
        $this->isReturn = $isReturn;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPlanDeliveryDate(): ?string
    {
        return $this->planDeliveryDate;
    }

    /**
     * @param string|null $planDeliveryDate
     *
     * @return StateParcel
     */
    public function setPlanDeliveryDate(?string $planDeliveryDate): StateParcel
    {
        $this->planDeliveryDate = $planDeliveryDate;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getOrderPhysicalWeight(): ?float
    {
        return $this->orderPhysicalWeight;
    }

    /**
     * @param float|null $orderPhysicalWeight
     *
     * @return StateParcel
     */
    public function setOrderPhysicalWeight(?float $orderPhysicalWeight): StateParcel
    {
        $this->orderPhysicalWeight = $orderPhysicalWeight;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getOrderVolume(): ?float
    {
        return $this->orderVolume;
    }

    /**
     * @param float|null $orderVolume
     *
     * @return StateParcel
     */
    public function setOrderVolume(?float $orderVolume): StateParcel
    {
        $this->orderVolume = $orderVolume;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getOrderVolumeWeight(): ?float
    {
        return $this->orderVolumeWeight;
    }

    /**
     * @param float|null $orderVolumeWeight
     *
     * @return StateParcel
     */
    public function setOrderVolumeWeight(?float $orderVolumeWeight): StateParcel
    {
        $this->orderVolumeWeight = $orderVolumeWeight;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getOrderPayWeight(): ?float
    {
        return $this->orderPayWeight;
    }

    /**
     * @param float|null $orderPayWeight
     *
     * @return StateParcel
     */
    public function setOrderPayWeight(?float $orderPayWeight): StateParcel
    {
        $this->orderPayWeight = $orderPayWeight;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getOrderCost(): ?float
    {
        return $this->orderCost;
    }

    /**
     * @param float|null $orderCost
     *
     * @return StateParcel
     */
    public function setOrderCost(?float $orderCost): StateParcel
    {
        $this->orderCost = $orderCost;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getParcelPhysicalWeight(): ?float
    {
        return $this->parcelPhysicalWeight;
    }

    /**
     * @param float|null $parcelPhysicalWeight
     *
     * @return StateParcel
     */
    public function setParcelPhysicalWeight(?float $parcelPhysicalWeight): StateParcel
    {
        $this->parcelPhysicalWeight = $parcelPhysicalWeight;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getParcelVolume(): ?float
    {
        return $this->parcelVolume;
    }

    /**
     * @param float|null $parcelVolume
     *
     * @return StateParcel
     */
    public function setParcelVolume(?float $parcelVolume): StateParcel
    {
        $this->parcelVolume = $parcelVolume;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getParcelVolumeWeight(): ?float
    {
        return $this->parcelVolumeWeight;
    }

    /**
     * @param float|null $parcelVolumeWeight
     *
     * @return StateParcel
     */
    public function setParcelVolumeWeight(?float $parcelVolumeWeight): StateParcel
    {
        $this->parcelVolumeWeight = $parcelVolumeWeight;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getParcelPayWeight(): ?float
    {
        return $this->parcelPayWeight;
    }

    /**
     * @param float|null $parcelPayWeight
     *
     * @return StateParcel
     */
    public function setParcelPayWeight(?float $parcelPayWeight): StateParcel
    {
        $this->parcelPayWeight = $parcelPayWeight;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getParcelLength(): ?float
    {
        return $this->parcelLength;
    }

    /**
     * @param float|null $parcelLength
     *
     * @return StateParcel
     */
    public function setParcelLength(?float $parcelLength): StateParcel
    {
        $this->parcelLength = $parcelLength;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getParcelWidth(): ?float
    {
        return $this->parcelWidth;
    }

    /**
     * @param float|null $parcelWidth
     *
     * @return StateParcel
     */
    public function setParcelWidth(?float $parcelWidth): StateParcel
    {
        $this->parcelWidth = $parcelWidth;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getParcelHeight(): ?float
    {
        return $this->parcelHeight;
    }

    /**
     * @param float|null $parcelHeight
     *
     * @return StateParcel
     */
    public function setParcelHeight(?float $parcelHeight): StateParcel
    {
        $this->parcelHeight = $parcelHeight;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNewState(): ?string
    {
        return $this->newState;
    }

    /**
     * @param string|null $newState
     *
     * @return StateParcel
     */
    public function setNewState(?string $newState): StateParcel
    {
        $this->newState = $newState;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTransitionTime(): ?string
    {
        return $this->transitionTime;
    }

    /**
     * @param string|null $transitionTime
     *
     * @return StateParcel
     */
    public function setTransitionTime(?string $transitionTime): StateParcel
    {
        $this->transitionTime = $transitionTime;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTerminalCode(): ?string
    {
        return $this->terminalCode;
    }

    /**
     * @param string|null $terminalCode
     *
     * @return StateParcel
     */
    public function setTerminalCode(?string $terminalCode): StateParcel
    {
        $this->terminalCode = $terminalCode;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTerminalCity(): ?string
    {
        return $this->terminalCity;
    }

    /**
     * @param string|null $terminalCity
     *
     * @return StateParcel
     */
    public function setTerminalCity(?string $terminalCity): StateParcel
    {
        $this->terminalCity = $terminalCity;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getIncidentCode(): ?string
    {
        return $this->incidentCode;
    }

    /**
     * @param string|null $incidentCode
     *
     * @return StateParcel
     */
    public function setIncidentCode(?string $incidentCode): StateParcel
    {
        $this->incidentCode = $incidentCode;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getIncidentName(): ?string
    {
        return $this->incidentName;
    }

    /**
     * @param string|null $incidentName
     *
     * @return StateParcel
     */
    public function setIncidentName(?string $incidentName): StateParcel
    {
        $this->incidentName = $incidentName;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getConsignee(): ?string
    {
        return $this->consignee;
    }

    /**
     * @param string|null $consignee
     *
     * @return StateParcel
     */
    public function setConsignee(?string $consignee): StateParcel
    {
        $this->consignee = $consignee;
        return $this;
    }

}
