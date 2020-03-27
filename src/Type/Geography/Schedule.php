<?php

namespace Gam6itko\DpdCarrier\Type\Geography;

use Gam6itko\DpdCarrier\Type\ArrayLike;

class Schedule extends ArrayLike
{
    /** @var string|null */
    protected $operation;

    /** @var TimeTable[]|null */
    protected $timetable;

    public function getOperation(): ?string
    {
        return $this->operation;
    }

    public function setOperation(?string $operation): Schedule
    {
        $this->operation = $operation;

        return $this;
    }

    /**
     * @return TimeTable[]|null
     */
    public function getTimetable(): ?array
    {
        return $this->timetable;
    }

    /**
     * @param TimeTable[]|null $timetable
     */
    public function setTimetable(?array $timetable): Schedule
    {
        $this->timetable = $timetable;

        return $this;
    }
}
