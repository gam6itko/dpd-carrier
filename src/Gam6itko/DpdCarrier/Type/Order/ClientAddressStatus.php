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

    /**
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * @param string|null $code
     *
     * @return ClientAddressStatus
     */
    public function setCode(?string $code): ClientAddressStatus
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param string|null $status
     *
     * @return ClientAddressStatus
     */
    public function setStatus(?string $status): ClientAddressStatus
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getErrorMessage(): ?string
    {
        return $this->errorMessage;
    }

    /**
     * @param string|null $errorMessage
     *
     * @return ClientAddressStatus
     */
    public function setErrorMessage(?string $errorMessage): ClientAddressStatus
    {
        $this->errorMessage = $errorMessage;
        return $this;
    }

}
