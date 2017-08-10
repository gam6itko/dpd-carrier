<?php
namespace Gam6itko\DpdCarrier\Type;

class Services
{
    /** @var string[] */
    protected $serviceCode;

    /** @var integer */
    protected $days;

    /**
     * @return \string[]
     */
    public function getServiceCode()
    {
        return $this->serviceCode;
    }

    /**
     * @param \string[] $serviceCode
     * @return Services
     */
    public function setServiceCode($serviceCode)
    {
        $this->serviceCode = $serviceCode;
        return $this;
    }

    /**
     * @return int
     */
    public function getDays()
    {
        return $this->days;
    }

    /**
     * @param int $days
     * @return Services
     */
    public function setDays($days)
    {
        $this->days = $days;
        return $this;
    }

}