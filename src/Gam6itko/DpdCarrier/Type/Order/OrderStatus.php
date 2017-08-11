<?php
namespace Gam6itko\DpdCarrier\Type\Order;

use Gam6itko\DpdCarrier\Type\Traits\ToArrayTrait;

class OrderStatus
{
    use ToArrayTrait;

    /** @var string */
    protected $orderNumberInternal;

    /** @var string */
    protected $orderNum;

    /** @var string */
    protected $status;

    /** @var string */
    protected $errorMessage;

    /**
     * @return string
     */
    public function getOrderNumberInternal()
    {
        return $this->orderNumberInternal;
    }

    /**
     * @param string $orderNumberInternal
     * @return OrderStatus
     */
    public function setOrderNumberInternal($orderNumberInternal)
    {
        $this->orderNumberInternal = $orderNumberInternal;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrderNum()
    {
        return $this->orderNum;
    }

    /**
     * @param string $orderNum
     * @return OrderStatus
     */
    public function setOrderNum($orderNum)
    {
        $this->orderNum = $orderNum;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return OrderStatus
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->errorMessage;
    }

    /**
     * @param string $errorMessage
     * @return OrderStatus
     */
    public function setErrorMessage($errorMessage)
    {
        $this->errorMessage = $errorMessage;
        return $this;
    }
}