<?php

namespace Gam6itko\DpdCarrier\Type\Order;

class ClientAddressStatus
{
    /** @var string|null */
    protected $code;

    /** @var string|null */
    protected $status;

    /** @var string|null */
    protected $errorMessage;

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): ClientAddressStatus
    {
        $this->code = $code;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): ClientAddressStatus
    {
        $this->status = $status;

        return $this;
    }

    public function getErrorMessage(): ?string
    {
        return $this->errorMessage;
    }

    public function setErrorMessage(?string $errorMessage): ClientAddressStatus
    {
        $this->errorMessage = $errorMessage;

        return $this;
    }
}
