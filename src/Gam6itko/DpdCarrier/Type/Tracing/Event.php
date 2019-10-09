<?php

namespace Gam6itko\DpdCarrier\Type\Tracing;

/**
 * @author Alexander Strizhak <gam6itko@gmail.com>
 */
class Event
{
    /** @var int */
    protected $docId;

    /** @var \DateTime */
    protected $docDate;

    /** @var int */
    protected $clientNumber;

    /** @var bool */
    protected $resultComplete;
}
