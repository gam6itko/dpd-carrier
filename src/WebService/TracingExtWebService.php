<?php

namespace Gam6itko\DpdCarrier\WebService;

class TracingExtWebService extends TracingWebService
{
    protected function getWsdlTest(): string
    {
        return 'http://wstest.dpd.ru/services/tracing1-1?wsdl';
    }

    protected function getWsdlProd(): string
    {
        return 'http://ws.dpd.ru/services/tracing1-1?wsdl';
    }

    /**
     * @throws \LogicException
     */
    public function getStatesByClient()
    {
        throw new \LogicException('Unsupported');
    }
}
