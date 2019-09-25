<?php

namespace Gam6itko\DpdCarrier\Type\Geography;

use Gam6itko\DpdCarrier\Type\ArrayLike;

class Schedule extends ArrayLike
{
    /** @var string */
    protected $operation;

    /** @var TimeTable[] */
    protected $timetable;

    /**
     * @return string
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * @param string $operation
     *
     * @return Schedule
     */
    public function setOperation($operation)
    {
        $this->operation = $operation;

        return $this;
    }

    /**
     * @return TimeTable[]
     */
    public function getTimetable()
    {
        return $this->timetable;
    }

    /**
     * @param TimeTable[] $timetable
     *
     * @return Schedule
     */
    public function setTimetable(array $timetable)
    {
        $this->timetable = $timetable;

        return $this;
    }
}
