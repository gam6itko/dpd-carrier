<?php

namespace Gam6itko\DpdCarrier\Type;

use Gam6itko\DpdCarrier\Type\Order\OrderStatus;

class OrderLabelsFile
{
    /** @var string|null binary file content */
    private $file;

    /** @var OrderStatus[] */
    private $order;

    /**
     * @return OrderStatus[]
     */
    public function getOrderStatuses()
    {
        return $this->order;
    }

    public function getFileData(): ?string
    {
        return $this->file;
    }
}
