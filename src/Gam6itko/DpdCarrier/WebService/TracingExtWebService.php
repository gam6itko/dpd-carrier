<?php

namespace Gam6itko\DpdCarrier\WebService;

class TracingExtWebService extends TracingWebService
{
    /**
     * @return mixed
     */
    protected function getWsdlTest(): string
    {
        return 'http://wstest.dpd.ru/services/tracing1-1?wsdl';
    }

    /**
     * @return mixed
     */
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
