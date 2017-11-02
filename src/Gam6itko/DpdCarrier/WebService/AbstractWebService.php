<?php
namespace Gam6itko\DpdCarrier\WebService;

abstract class AbstractWebService
{
    /** @var string */
    protected $clientNumber;

    /** @var string */
    protected $clientKey;

    /** @var \SoapClient */
    protected $soapClient;

    /** @var bool */
    protected $testMode;

    /**
     * CseService constructor.
     * @param $clientNumber
     * @param $clientKey
     * @param $testMode
     * @internal param string $wsdlHost
     */
    public function __construct($clientNumber, $clientKey, $testMode = true)
    {
        $this->clientNumber = $clientNumber;
        $this->clientKey = $clientKey;
        $this->testMode = $testMode;

        $this->soapClient = $this->buildSoapClient();
    }

    abstract protected function getWsdlTest();

    abstract protected function getWsdlProd();

    /**
     * @param $methodName
     * @param array $array
     * @param string $wrapin
     * @return array|mixed|\stdClass
     */
    protected function doRequest($methodName, array $array = [], $wrapin)
    {
        $soapRequest = $this->buildRequest($array);
        if ($wrapin) {
            $soapRequest = [
                $wrapin => $soapRequest
            ];
        }
        $soapResult = $this->soapClient->__soapCall($methodName, [$soapRequest]);

        return $soapResult->return;
    }

    /**
     * @param $array
     * @return array
     */
    protected function buildRequest($array)
    {
        return array_merge([
            'auth' => [
                'clientNumber' => $this->clientNumber,
                'clientKey'    => $this->clientKey,
            ]
        ], $array);
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
            'trace'    => $this->testMode,
            'features' => SOAP_SINGLE_ELEMENT_ARRAYS,
            'classmap' => $this->getClassmap()
        ]);
    }
}
