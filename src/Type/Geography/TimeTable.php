<?php

namespace Gam6itko\DpdCarrier\Type\Geography;

class TimeTable
{
    /** @var string|null */
    protected $weekDays;

    /** @var string|null */
    protected $workTime;

    public function getWeekDays(): ?string
    {
        return $this->weekDays;
    }

    public function setWeekDays(?string $weekDays): TimeTable
    {
        $this->weekDays = $weekDays;

        return $this;
    }

    public function getWorkTime(): ?string
    {
        return $this->workTime;
    }

    public function setWorkTime(?string $workTime): TimeTable
    {
        $this->workTime = $workTime;

        return $this;
    }
}
