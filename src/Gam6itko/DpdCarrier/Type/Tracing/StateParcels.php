<?php
namespace Gam6itko\DpdCarrier\Type\Tracing;

class StateParcels
{
    /** @var integer */
    protected $docId;

    /** @var string - date */
    protected $docDate;

    /** @var float */
    protected $clientNumber;

    /** @var bool */
    protected $resultComplete;

    /** @var StateParcel[] */
    protected $states;

    /**
     * @return int
     */
    public function getDocId()
    {
        return $this->docId;
    }

    /**
     * @param int $docId
     * @return StateParcels
     */
    public function setDocId($docId)
    {
        $this->docId = $docId;
        return $this;
    }

    /**
     * @return string
     */
    public function getDocDate()
    {
        return $this->docDate;
    }

    /**
     * @param string $docDate
     * @return StateParcels
     */
    public function setDocDate($docDate)
    {
        $this->docDate = $docDate;
        return $this;
    }

    /**
     * @return float
     */
    public function getClientNumber()
    {
        return $this->clientNumber;
    }

    /**
     * @param float $clientNumber
     * @return StateParcels
     */
    public function setClientNumber($clientNumber)
    {
        $this->clientNumber = $clientNumber;
        return $this;
    }

    /**
     * @return bool
     */
    public function isResultComplete()
    {
        return $this->resultComplete;
    }

    /**
     * @param bool $resultComplete
     * @return StateParcels
     */
    public function setResultComplete($resultComplete)
    {
        $this->resultComplete = $resultComplete;
        return $this;
    }

    /**
     * @return StateParcel[]
     */
    public function getStates()
    {
        return $this->states;
    }

    /**
     * @param StateParcel[] $states
     * @return StateParcels
     */
    public function setStates($states)
    {
        $this->states = $states;
        return $this;
    }
}
