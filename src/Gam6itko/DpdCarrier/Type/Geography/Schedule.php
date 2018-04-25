<?php
namespace Gam6itko\DpdCarrier\Type\Geography;

use Gam6itko\DpdCarrier\Type\ArrayLike;

class Schedule extends ArrayLike
{
    /** @var string */
    protected $operation;

    /** @var TimeTable */
    protected $timetable;
}
