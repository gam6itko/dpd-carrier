<?php

namespace Gam6itko\DpdCarrier\Tests\WebService;

use Gam6itko\DpdCarrier\WebService\EventTrackingWebService;

class EventTrackingTest extends AbstractDpdServiceTestCase
{
    /**
     * @return EventTrackingWebService
     */
    protected function getDpdWebService()
    {
        return $this->createService(EventTrackingWebService::class);
    }

    public function testGetEvents()
    {
        $result = $this->getDpdWebService()->getEvents(new \DateTime('2019-08-10'), new \DateTime('2019-09-02'));
        self::assertNotEmpty($result);
    }
}
