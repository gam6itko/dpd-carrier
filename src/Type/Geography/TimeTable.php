<?php

namespace Gam6itko\DpdCarrier\Type\Geography;

class TimeTable
{
    /** @var string|null */
    protected $weekDays;

    /** @var string|null */
    protected $workTime;

    /**
     * @return string|null
     */
    public function getWeekDays(): ?string
    {
        return $this->weekDays;
    }

    /**
     * @param string|null $weekDays
     *
     * @return TimeTable
     */
    public function setWeekDays(?string $weekDays): TimeTable
    {
        $this->weekDays = $weekDays;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getWorkTime(): ?string
    {
        return $this->workTime;
    }

    /**
     * @param string|null $workTime
     *
     * @return TimeTable
     */
    public function setWorkTime(?string $workTime): TimeTable
    {
        $this->workTime = $workTime;
        return $this;
    }
}
