<?php

namespace Gam6itko\DpdCarrier\Type\EventTracking;

/**
 * @author Alexander Strizhak <gam6itko@gmail.com>
 */
class Event
{
    /** @var string|null */
    protected $clientOrderNr;

    /** @var string|null */
    protected $dpdOrderNr;

    /** @var int|null */
    protected $eventNumber;

    /** @var string|null */
    protected $eventCode;

    /** @var string|null */
    protected $eventName;

    /** @var string|null */
    protected $reasonName;

    /** @var string|null DATE_ATOM */
    protected $eventDate;

    /** @var EventParameter[]|null */
    protected $parameter;

    public function getClientOrderNr(): ?string
    {
        return $this->clientOrderNr;
    }

    public function setClientOrderNr(?string $clientOrderNr): Event
    {
        $this->clientOrderNr = $clientOrderNr;

        return $this;
    }

    public function getDpdOrderNr(): ?string
    {
        return $this->dpdOrderNr;
    }

    public function setDpdOrderNr(?string $dpdOrderNr): Event
    {
        $this->dpdOrderNr = $dpdOrderNr;

        return $this;
    }

    public function getEventNumber(): ?int
    {
        return $this->eventNumber;
    }

    public function setEventNumber(?int $eventNumber): Event
    {
        $this->eventNumber = $eventNumber;

        return $this;
    }

    public function getEventCode(): ?string
    {
        return $this->eventCode;
    }

    public function setEventCode(?string $eventCode): Event
    {
        $this->eventCode = $eventCode;

        return $this;
    }

    public function getEventName(): ?string
    {
        return $this->eventName;
    }

    public function setEventName(?string $eventName): Event
    {
        $this->eventName = $eventName;

        return $this;
    }

    public function getReasonName(): ?string
    {
        return $this->reasonName;
    }

    public function setReasonName(?string $reasonName): Event
    {
        $this->reasonName = $reasonName;

        return $this;
    }

    public function getEventDate(): ?string
    {
        return $this->eventDate;
    }

    public function setEventDate(?string $eventDate): Event
    {
        $this->eventDate = $eventDate;

        return $this;
    }

    /**
     * @return EventParameter[]|null
     */
    public function getParameter(): ?array
    {
        return $this->parameter;
    }

    /**
     * @param EventParameter[]|null $parameter
     */
    public function setParameter(?array $parameter): Event
    {
        $this->parameter = $parameter;

        return $this;
    }
}
