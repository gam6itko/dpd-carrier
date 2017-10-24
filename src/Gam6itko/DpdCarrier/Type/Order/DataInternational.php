<?php
namespace Gam6itko\DpdCarrier\Type\Order;

class DataInternational
{
    /** @var string */
    protected $currency;

    /** @var string */
    protected $currencyDeclaredValue;

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     * @return DataInternational
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrencyDeclaredValue()
    {
        return $this->currencyDeclaredValue;
    }

    /**
     * @param string $currencyDeclaredValue
     * @return DataInternational
     */
    public function setCurrencyDeclaredValue($currencyDeclaredValue)
    {
        $this->currencyDeclaredValue = $currencyDeclaredValue;
        return $this;
    }
}
