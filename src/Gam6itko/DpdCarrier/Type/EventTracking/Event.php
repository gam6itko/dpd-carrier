<?php

namespace Gam6itko\DpdCarrier\Type\EventTracking;

/**
 * @author Alexander Strizhak <gam6itko@gmail.com>
 */
class Event
{
    /** @var string */
    protected $clientOrderNr;

    /** @var string */
    protected $dpdOrderNr;

    /** @var int */
    protected $eventNumber;

    /** @var string */
    protected $eventCode;

    /** @var string */
    protected $eventName;

    /** @var string */
    protected $reasonName;

    /** @var string DATE_ATOM */
    protected $eventDate;

    /** @var EventParameter[] */
    protected $parameter;

    /**
     * @return string
     */
    public function getClientOrderNr()
    {
        return $this->clientOrderNr;
    }

    /**
     * @param string $clientOrderNr
     *
     * @return Event
     */
    public function setClientOrderNr($clientOrderNr)
    {
        $this->clientOrderNr = $clientOrderNr;

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
     *
     * @return Event
     */
    public function setDpdOrderNr($dpdOrderNr)
    {
        $this->dpdOrderNr = $dpdOrderNr;

        return $this;
    }

    /**
     * @return int
     */
    public function getEventNumber()
    {
        return $this->eventNumber;
    }

    /**
     * @param int $eventNumber
     *
     * @return Event
     */
    public function setEventNumber($eventNumber)
    {
        $this->eventNumber = $eventNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getEventCode()
    {
        return $this->eventCode;
    }

    /**
     * @param string $eventCode
     *
     * @return Event
     */
    public function setEventCode($eventCode)
    {
        $this->eventCode = $eventCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getEventName()
    {
        return $this->eventName;
    }

    /**
     * @param string $eventName
     *
     * @return Event
     */
    public function setEventName($eventName)
    {
        $this->eventName = $eventName;

        return $this;
    }

    /**
     * @return string
     */
    public function getReasonName()
    {
        return $this->reasonName;
    }

    /**
     * @param string $reasonName
     *
     * @return Event
     */
    public function setReasonName($reasonName)
    {
        $this->reasonName = $reasonName;

        return $this;
    }

    /**
     * @return string
     */
    public function getEventDate()
    {
        return $this->eventDate;
    }

    /**
     * @param string $eventDate
     *
     * @return Event
     */
    public function setEventDate($eventDate)
    {
        $this->eventDate = $eventDate;

        return $this;
    }

    /**
     * @return EventParameter[]
     */
    public function getParameters()
    {
        return $this->parameter;
    }

    /**
     * @param EventParameter[] $parameters
     *
     * @return Event
     */
    public function setParameters($parameters)
    {
        $this->parameter = $parameters;

        return $this;
    }

}
