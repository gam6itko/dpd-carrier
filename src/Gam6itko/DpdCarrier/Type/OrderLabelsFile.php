<?php

namespace Gam6itko\DpdCarrier\Type;

use Gam6itko\DpdCarrier\Type\Order\OrderStatus;

class OrderLabelsFile
{
    /** @var string binary file content */
    private $file;

    /** @var OrderStatus[] */
    private $order;

    /**
     * @return string
     */
    public function getFile(): string
    {
        return $this->file;
    }

    /**
     * @param string $file
     *
     * @return OrderLabelsFile
     */
    public function setFile(string $file): OrderLabelsFile
    {
        $this->file = $file;
        return $this;
    }

    /**
     * @return OrderStatus[]
     */
    public function getOrder(): array
    {
        return $this->order;
    }

    /**
     * @param OrderStatus[] $order
     *
     * @return OrderLabelsFile
     */
    public function setOrder(array $order): OrderLabelsFile
    {
        $this->order = $order;
        return $this;
    }

}
