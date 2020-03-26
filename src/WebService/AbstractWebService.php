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
    public function __construct(int $clientNumber, string $clientKey, bool $testMode = false)
    {
        $this->clientNumber = $clientNumber;
        $this->clientKey = $clientKey;
        $this->testMode = $testMode;
    }

    abstract protected function getWsdlTest(): string;

    abstract protected function getWsdlProd(): string;

    protected function getSoapClient(): \SoapClient
    {
        if ($this->soapClient) {
            return $this->soapClient;
        }

        return $this->soapClient = $this->buildSoapClient();
    }

    /**
     * @param $methodName
     *
     * @return array|mixed|\stdClass
     */
    protected function doRequest(string $methodName, array $array = [], ?string $wrapIn = 'request')
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
     */
    private function buildRequest(array $array): array
    {
        return array_merge(
            [
                'auth' => [
                    'clientNumber' => $this->clientNumber,
                    'clientKey'    => $this->clientKey,
                ],
            ],
            $array
        );
    }

    protected function getClassmap(): array
    {
        return [];
    }

    /**
     * @throws \SoapFault
     */
    private function buildSoapClient(): \SoapClient
    {
        $wsdl = $this->testMode ? $this->getWsdlTest() : $this->getWsdlProd();

        return new \SoapClient($wsdl, [
            'trace'              => $this->testMode,
            'features'           => SOAP_SINGLE_ELEMENT_ARRAYS,
            'classmap'           => $this->getClassmap(),
            'connection_timeout' => 5,
        ]);
    }
}
