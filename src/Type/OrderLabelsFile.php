<?php

namespace Gam6itko\DpdCarrier\Type;

use Gam6itko\DpdCarrier\Type\Order\OrderStatus;

class OrderLabelsFile
{
    /** @var string binary file content */
    private $file;

    /** @var OrderStatus[] */
    private $order;

    public function getFile(): string
    {
        return $this->file;
    }

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
     */
    public function setOrder(array $order): OrderLabelsFile
    {
        $this->order = $order;

        return $this;
    }
}
