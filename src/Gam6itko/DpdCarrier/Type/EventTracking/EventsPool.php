<?php

namespace Gam6itko\DpdCarrier\Type\EventTracking;

/**
 * @author Alexander Strizhak <gam6itko@gmail.com>
 */
class EventsPool
{
    /** @var int|null */
    protected $docId;

    /** @var string|null DATE_ATOM */
    protected $docDate;

    /** @var int|null */
    protected $clientNumber;

    /** @var bool|null */
    protected $resultComplete;

    /** @var Event[]|null */
    protected $event;

    public function getDocId(): ?int
    {
        return $this->docId;
    }

    public function setDocId(?int $docId): EventsPool
    {
        $this->docId = $docId;

        return $this;
    }

    public function getDocDate(): ?string
    {
        return $this->docDate;
    }

    public function setDocDate(?string $docDate): EventsPool
    {
        $this->docDate = $docDate;

        return $this;
    }

    public function getClientNumber(): ?int
    {
        return $this->clientNumber;
    }

    public function setClientNumber(?int $clientNumber): EventsPool
    {
        $this->clientNumber = $clientNumber;

        return $this;
    }

    public function getResultComplete(): ?bool
    {
        return $this->resultComplete;
    }

    public function setResultComplete(?bool $resultComplete): EventsPool
    {
        $this->resultComplete = $resultComplete;

        return $this;
    }

    /**
     * @return Event[]|null
     */
    public function getEvent(): ?array
    {
        return $this->event;
    }

    /**
     * @param Event[]|null $event
     */
    public function setEvent(?array $event): EventsPool
    {
        $this->event = $event;

        return $this;
    }
}
