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

    /** @var bool */
    protected $resultComplete = false;

    /** @var StateParcel[]|null */
    protected $states;

    public function getDocId(): ?int
    {
        return $this->docId;
    }

    public function setDocId(?int $docId): StateParcels
    {
        $this->docId = $docId;

        return $this;
    }

    public function getDocDate(): ?string
    {
        return $this->docDate;
    }

    public function setDocDate(?string $docDate): StateParcels
    {
        $this->docDate = $docDate;

        return $this;
    }

    public function getClientNumber(): ?float
    {
        return $this->clientNumber;
    }

    public function setClientNumber(?float $clientNumber): StateParcels
    {
        $this->clientNumber = $clientNumber;

        return $this;
    }

    public function isResultComplete(): bool
    {
        return $this->resultComplete ?? false;
    }

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
     */
    public function setStates(?array $states): StateParcels
    {
        $this->states = $states;

        return $this;
    }
}
