<?php

namespace Gam6itko\DpdCarrier\Type\Tracing;

class StateParcels
{
    /** @var int|null */
    protected $docId;

    /** @var string|null Date */
    protected $docDate;

    /** @var float|null */
    protected $clientNumber;

    /** @var bool|null */
    protected $resultComplete;

    /** @var StateParcel[]|null */
    protected $states;

    /**
     * @return int|null
     */
    public function getDocId(): ?int
    {
        return $this->docId;
    }

    /**
     * @param int|null $docId
     *
     * @return StateParcels
     */
    public function setDocId(?int $docId): StateParcels
    {
        $this->docId = $docId;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDocDate(): ?string
    {
        return $this->docDate;
    }

    /**
     * @param string|null $docDate
     *
     * @return StateParcels
     */
    public function setDocDate(?string $docDate): StateParcels
    {
        $this->docDate = $docDate;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getClientNumber(): ?float
    {
        return $this->clientNumber;
    }

    /**
     * @param float|null $clientNumber
     *
     * @return StateParcels
     */
    public function setClientNumber(?float $clientNumber): StateParcels
    {
        $this->clientNumber = $clientNumber;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getResultComplete(): ?bool
    {
        return $this->resultComplete;
    }

    /**
     * @param bool|null $resultComplete
     *
     * @return StateParcels
     */
    public function setResultComplete(?bool $resultComplete): StateParcels
    {
        $this->resultComplete = $resultComplete;
        return $this;
    }

    /**
     * @return StateParcel[]|null
     */
    public function getStates(): ?array
    {
        return $this->states;
    }

    /**
     * @param StateParcel[]|null $states
     *
     * @return StateParcels
     */
    public function setStates(?array $states): StateParcels
    {
        $this->states = $states;
        return $this;
    }

}
