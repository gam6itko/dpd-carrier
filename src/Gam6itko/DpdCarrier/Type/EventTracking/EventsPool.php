<?php

namespace Gam6itko\DpdCarrier\Type\EventTracking;

/**
 * @author Alexander Strizhak <gam6itko@gmail.com>
 */
class EventsPool
{
    /** @var int */
    protected $docId;

    /** @var string DATE_ATOM */
    protected $docDate;

    /** @var int */
    protected $clientNumber;

    /** @var bool */
    protected $resultComplete;

    /** @var Event[] */
    protected $event;

    /**
     * @return int
     */
    public function getDocId()
    {
        return $this->docId;
    }

    /**
     * @param int $docId
     *
     * @return EventsPool
     */
    public function setDocId($docId)
    {
        $this->docId = $docId;

        return $this;
    }

    /**
     * @return string
     */
    public function getDocDate()
    {
        return $this->docDate;
    }

    /**
     * @param string $docDate
     *
     * @return EventsPool
     */
    public function setDocDate($docDate)
    {
        $this->docDate = $docDate;

        return $this;
    }

    /**
     * @return int
     */
    public function getClientNumber()
    {
        return $this->clientNumber;
    }

    /**
     * @param int $clientNumber
     *
     * @return EventsPool
     */
    public function setClientNumber($clientNumber)
    {
        $this->clientNumber = $clientNumber;

        return $this;
    }

    /**
     * @return bool
     */
    public function isResultComplete()
    {
        return $this->resultComplete;
    }

    /**
     * @param bool $resultComplete
     *
     * @return EventsPool
     */
    public function setResultComplete($resultComplete)
    {
        $this->resultComplete = $resultComplete;

        return $this;
    }

    /**
     * @return Event[]
     */
    public function getEvents()
    {
        return $this->event;
    }

    /**
     * @param Event[] $events
     *
     * @return EventsPool
     */
    public function setEvents($events)
    {
        $this->event = $events;

        return $this;
    }


}
