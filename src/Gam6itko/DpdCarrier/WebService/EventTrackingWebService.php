<?php

namespace Gam6itko\DpdCarrier\WebService;

use Gam6itko\DpdCarrier\Type\EventTracking\Event;
use Gam6itko\DpdCarrier\Type\EventTracking\EventParameter;
use Gam6itko\DpdCarrier\Type\EventTracking\EventsPool;

/**
 * @author Alexander Strizhak <gam6itko@gmail.com>
 *
 * @todo getTrakingOrderLink
 */
class EventTrackingWebService extends AbstractWebService
{
    /**
     * {@inheritdoc}
     */
    protected function getWsdlTest(): string
    {
        return 'http://wstest.dpd.ru/services/event-tracking?wsdl';
    }

    /**
     * {@inheritdoc}
     */
    protected function getWsdlProd(): string
    {
        return 'http://ws.dpd.ru/services/event-tracking?wsdl';
    }

    protected function getClassmap(): array
    {
        return [
            'eventTackingResponse' => EventsPool::class,
            'eventType'            => Event::class,
            'parameterType'        => EventParameter::class,
        ];
    }

    /**
     * @return EventsPool
     */
    public function getEvents(\DateTimeInterface $dateFrom, \DateTimeInterface $dateTo, int $maxRowCount = 50)
    {
        return $this->doRequest(__FUNCTION__, [
            'dateFrom'    => $dateFrom->format(DATE_W3C),
            'dateTo'      => $dateTo->format(DATE_W3C),
            'maxRowCount' => $maxRowCount,
        ]);
    }

    /**
     * @param int docId
     *
     * @return mixed
     */
    public function confirm(int $docId)
    {
        return $this->doRequest(__FUNCTION__, ['docId' => $docId]);
    }
}
