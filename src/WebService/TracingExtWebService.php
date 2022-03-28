<?php

namespace Gam6itko\DpdCarrier\WebService;

class TracingExtWebService extends TracingWebService
{
    protected function getWsdlTest(): string
    {
        return 'https://wstest.dpd.ru/services/tracing1-1?wsdl';
    }

    protected function getWsdlProd(): string
    {
        return 'https://ws.dpd.ru/services/tracing1-1?wsdl';
    }

    /**
     * @throws \LogicException
     */
    public function getStatesByClient()
    {
        throw new \LogicException('Unsupported');
    }
}
