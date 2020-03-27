<?php

namespace Gam6itko\DpdCarrier\Type\Order;

use Gam6itko\DpdCarrier\Type\ArrayLike;

class OrderStatus extends ArrayLike
{
    /** @var string|null */
    protected $orderNumberInternal;

    /** @var string|null */
    protected $orderNum;

    /** @var string|null */
    protected $status;

    /** @var string|null */
    protected $errorMessage;

    public function getOrderNumberInternal(): ?string
    {
        return $this->orderNumberInternal;
    }

    public function setOrderNumberInternal(?string $orderNumberInternal): OrderStatus
    {
        $this->orderNumberInternal = $orderNumberInternal;

        return $this;
    }

    public function getOrderNum(): ?string
    {
        return $this->orderNum;
    }

    public function setOrderNum(?string $orderNum): OrderStatus
    {
        $this->orderNum = $orderNum;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): OrderStatus
    {
        $this->status = $status;

        return $this;
    }

    public function getErrorMessage(): ?string
    {
        return $this->errorMessage;
    }

    public function setErrorMessage(?string $errorMessage): OrderStatus
    {
        $this->errorMessage = $errorMessage;

        return $this;
    }
}
