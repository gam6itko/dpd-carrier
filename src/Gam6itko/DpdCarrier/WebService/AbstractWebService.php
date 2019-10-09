<?php

namespace Gam6itko\DpdCarrier\WebService;

abstract class AbstractWebService
{
    /** @var string */
    protected $clientNumber;

    /** @var string */
    protected $clientKey;

    /** @var \SoapClient */
    private $soapClient;

    /** @var bool */
    protected $testMode;

    /**
     * CseService constructor.
     *
     * @param $clientNumber
     * @param $clientKey
     * @param $testMode
     *
     * @internal param string $wsdlHost
     */
    public function __construct($clientNumber, $clientKey, $testMode = false)
    {
        $this->clientNumber = $clientNumber;
        $this->clientKey = $clientKey;
        $this->testMode = $testMode;
    }

    abstract protected function getWsdlTest();

    abstract protected function getWsdlProd();

    protected function getSoapClient()
    {
        if ($this->soapClient) {
            return $this->soapClient;
        }

        return $this->soapClient = $this->buildSoapClient();
    }

    /**
     * @param        $methodName
     * @param array  $array
     * @param string $wrapIn
     *
     * @return array|mixed|\stdClass
     */
    protected function doRequest($methodName, array $array = [], $wrapIn = 'request')
    {
        $soapRequest = $this->buildRequest($array);
        if ($wrapIn) {
            $soapRequest = [
                $wrapIn => $soapRequest,
            ];
        }
        $soapResult = $this->getSoapClient()->__soapCall($methodName, [$soapRequest]);

        if (isset($soapResult->return)) {
            return $soapResult->return;
        }

        return $soapResult;
    }

    /**
     * @param $array
     *
     * @return array
     */
    protected function buildRequest($array)
    {
        return array_merge(
            [
                'auth' => [
                    'clientNumber' => $this->clientNumber,
                    'clientKey' => $this->clientKey,
                ],
            ],
            $array
        );
    }

    /**
     * @return array
     */
    protected function getClassmap()
    {
        return [];
    }

    /**
     * @return \SoapClient
     */
    protected function buildSoapClient()
    {
        $wsdl = $this->testMode ? $this->getWsdlTest() : $this->getWsdlProd();

        return new \SoapClient($wsdl, [
            'trace' => $this->testMode,
            'features' => SOAP_SINGLE_ELEMENT_ARRAYS,
            'classmap' => $this->getClassmap(),
            'connection_timeout' => 5,
        ]);
    }
}
