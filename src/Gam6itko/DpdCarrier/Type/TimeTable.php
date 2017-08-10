<?php
namespace Gam6itko\DpdCarrier\Type;

class TimeTable
{
    /** @var string */
    protected $weekDays;

    /** @var string */
    protected $workTime;

    /**
     * @return string
     */
    public function getWeekDays()
    {
        return $this->weekDays;
    }

    /**
     * @param string $weekDays
     * @return TimeTable
     */
    public function setWeekDays($weekDays)
    {
        $this->weekDays = $weekDays;
        return $this;
    }

    /**
     * @return string
     */
    public function getWorkTime()
    {
        return $this->workTime;
    }

    /**
     * @param string $workTime
     * @return TimeTable
     */
    public function setWorkTime($workTime)
    {
        $this->workTime = $workTime;
        return $this;
    }
}