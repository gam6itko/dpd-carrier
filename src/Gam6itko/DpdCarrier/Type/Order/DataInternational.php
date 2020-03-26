<?php

namespace Gam6itko\DpdCarrier\Type\Order;

class DataInternational
{
    /** @var string|null */
    protected $currency;

    /** @var string|null */
    protected $currencyDeclaredValue;

    /**
     * @return string|null
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * @param string|null $currency
     *
     * @return DataInternational
     */
    public function setCurrency(?string $currency): DataInternational
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCurrencyDeclaredValue(): ?string
    {
        return $this->currencyDeclaredValue;
    }

    /**
     * @param string|null $currencyDeclaredValue
     *
     * @return DataInternational
     */
    public function setCurrencyDeclaredValue(?string $currencyDeclaredValue): DataInternational
    {
        $this->currencyDeclaredValue = $currencyDeclaredValue;
        return $this;
    }

}
