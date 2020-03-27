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

    public function getClientOrderNr(): ?string
    {
        return $this->clientOrderNr;
    }

    public function setClientOrderNr(?string $clientOrderNr): StateParcel
    {
        $this->clientOrderNr = $clientOrderNr;

        return $this;
    }

    public function getClientParcelNr(): ?string
    {
        return $this->clientParcelNr;
    }

    public function setClientParcelNr(?string $clientParcelNr): StateParcel
    {
        $this->clientParcelNr = $clientParcelNr;

        return $this;
    }

    public function getDpdOrderNr(): ?string
    {
        return $this->dpdOrderNr;
    }

    public function setDpdOrderNr(?string $dpdOrderNr): StateParcel
    {
        $this->dpdOrderNr = $dpdOrderNr;

        return $this;
    }

    public function getDpdParcelNr(): ?string
    {
        return $this->dpdParcelNr;
    }

    public function setDpdParcelNr(?string $dpdParcelNr): StateParcel
    {
        $this->dpdParcelNr = $dpdParcelNr;

        return $this;
    }

    public function getPickupDate(): ?string
    {
        return $this->pickupDate;
    }

    public function setPickupDate(?string $pickupDate): StateParcel
    {
        $this->pickupDate = $pickupDate;

        return $this;
    }

    public function getDpdOrderReNr(): ?string
    {
        return $this->dpdOrderReNr;
    }

    public function setDpdOrderReNr(?string $dpdOrderReNr): StateParcel
    {
        $this->dpdOrderReNr = $dpdOrderReNr;

        return $this;
    }

    public function getDpdParcelReNr(): ?string
    {
        return $this->dpdParcelReNr;
    }

    public function setDpdParcelReNr(?string $dpdParcelReNr): StateParcel
    {
        $this->dpdParcelReNr = $dpdParcelReNr;

        return $this;
    }

    public function isReturn(): bool
    {
        return $this->isReturn ?? false;
    }

    public function setIsReturn(?bool $isReturn): StateParcel
    {
        $this->isReturn = $isReturn;

        return $this;
    }

    public function getPlanDeliveryDate(): ?string
    {
        return $this->planDeliveryDate;
    }

    public function setPlanDeliveryDate(?string $planDeliveryDate): StateParcel
    {
        $this->planDeliveryDate = $planDeliveryDate;

        return $this;
    }

    public function getOrderPhysicalWeight(): ?float
    {
        return $this->orderPhysicalWeight;
    }

    public function setOrderPhysicalWeight(?float $orderPhysicalWeight): StateParcel
    {
        $this->orderPhysicalWeight = $orderPhysicalWeight;

        return $this;
    }

    public function getOrderVolume(): ?float
    {
        return $this->orderVolume;
    }

    public function setOrderVolume(?float $orderVolume): StateParcel
    {
        $this->orderVolume = $orderVolume;

        return $this;
    }

    public function getOrderVolumeWeight(): ?float
    {
        return $this->orderVolumeWeight;
    }

    public function setOrderVolumeWeight(?float $orderVolumeWeight): StateParcel
    {
        $this->orderVolumeWeight = $orderVolumeWeight;

        return $this;
    }

    public function getOrderPayWeight(): ?float
    {
        return $this->orderPayWeight;
    }

    public function setOrderPayWeight(?float $orderPayWeight): StateParcel
    {
        $this->orderPayWeight = $orderPayWeight;

        return $this;
    }

    public function getOrderCost(): ?float
    {
        return $this->orderCost;
    }

    public function setOrderCost(?float $orderCost): StateParcel
    {
        $this->orderCost = $orderCost;

        return $this;
    }

    public function getParcelPhysicalWeight(): ?float
    {
        return $this->parcelPhysicalWeight;
    }

    public function setParcelPhysicalWeight(?float $parcelPhysicalWeight): StateParcel
    {
        $this->parcelPhysicalWeight = $parcelPhysicalWeight;

        return $this;
    }

    public function getParcelVolume(): ?float
    {
        return $this->parcelVolume;
    }

    public function setParcelVolume(?float $parcelVolume): StateParcel
    {
        $this->parcelVolume = $parcelVolume;

        return $this;
    }

    public function getParcelVolumeWeight(): ?float
    {
        return $this->parcelVolumeWeight;
    }

    public function setParcelVolumeWeight(?float $parcelVolumeWeight): StateParcel
    {
        $this->parcelVolumeWeight = $parcelVolumeWeight;

        return $this;
    }

    public function getParcelPayWeight(): ?float
    {
        return $this->parcelPayWeight;
    }

    public function setParcelPayWeight(?float $parcelPayWeight): StateParcel
    {
        $this->parcelPayWeight = $parcelPayWeight;

        return $this;
    }

    public function getParcelLength(): ?float
    {
        return $this->parcelLength;
    }

    public function setParcelLength(?float $parcelLength): StateParcel
    {
        $this->parcelLength = $parcelLength;

        return $this;
    }

    public function getParcelWidth(): ?float
    {
        return $this->parcelWidth;
    }

    public function setParcelWidth(?float $parcelWidth): StateParcel
    {
        $this->parcelWidth = $parcelWidth;

        return $this;
    }

    public function getParcelHeight(): ?float
    {
        return $this->parcelHeight;
    }

    public function setParcelHeight(?float $parcelHeight): StateParcel
    {
        $this->parcelHeight = $parcelHeight;

        return $this;
    }

    public function getNewState(): ?string
    {
        return $this->newState;
    }

    public function setNewState(?string $newState): StateParcel
    {
        $this->newState = $newState;

        return $this;
    }

    public function getTransitionTime(): ?string
    {
        return $this->transitionTime;
    }

    public function setTransitionTime(?string $transitionTime): StateParcel
    {
        $this->transitionTime = $transitionTime;

        return $this;
    }

    public function getTerminalCode(): ?string
    {
        return $this->terminalCode;
    }

    public function setTerminalCode(?string $terminalCode): StateParcel
    {
        $this->terminalCode = $terminalCode;

        return $this;
    }

    public function getTerminalCity(): ?string
    {
        return $this->terminalCity;
    }

    public function setTerminalCity(?string $terminalCity): StateParcel
    {
        $this->terminalCity = $terminalCity;

        return $this;
    }

    public function getIncidentCode(): ?string
    {
        return $this->incidentCode;
    }

    public function setIncidentCode(?string $incidentCode): StateParcel
    {
        $this->incidentCode = $incidentCode;

        return $this;
    }

    public function getIncidentName(): ?string
    {
        return $this->incidentName;
    }

    public function setIncidentName(?string $incidentName): StateParcel
    {
        $this->incidentName = $incidentName;

        return $this;
    }

    public function getConsignee(): ?string
    {
        return $this->consignee;
    }

    public function setConsignee(?string $consignee): StateParcel
    {
        $this->consignee = $consignee;

        return $this;
    }
}
