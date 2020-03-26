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

    /**
     * @return string|null
     */
    public function getOrderNumberInternal(): ?string
    {
        return $this->orderNumberInternal;
    }

    /**
     * @param string|null $orderNumberInternal
     *
     * @return OrderStatus
     */
    public function setOrderNumberInternal(?string $orderNumberInternal): OrderStatus
    {
        $this->orderNumberInternal = $orderNumberInternal;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getOrderNum(): ?string
    {
        return $this->orderNum;
    }

    /**
     * @param string|null $orderNum
     *
     * @return OrderStatus
     */
    public function setOrderNum(?string $orderNum): OrderStatus
    {
        $this->orderNum = $orderNum;
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
     * @return OrderStatus
     */
    public function setStatus(?string $status): OrderStatus
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
     * @return OrderStatus
     */
    public function setErrorMessage(?string $errorMessage): OrderStatus
    {
        $this->errorMessage = $errorMessage;
        return $this;
    }

}
