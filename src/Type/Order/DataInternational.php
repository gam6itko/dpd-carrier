<?php

namespace Gam6itko\DpdCarrier\Type\Order;

class DataInternational
{
    /** @var string|null */
    protected $currency;

    /** @var string|null */
    protected $currencyDeclaredValue;

    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    public function setCurrency(?string $currency): DataInternational
    {
        $this->currency = $currency;

        return $this;
    }

    public function getCurrencyDeclaredValue(): ?string
    {
        return $this->currencyDeclaredValue;
    }

    public function setCurrencyDeclaredValue(?string $currencyDeclaredValue): DataInternational
    {
        $this->currencyDeclaredValue = $currencyDeclaredValue;

        return $this;
    }
}
