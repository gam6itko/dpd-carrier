<?php
namespace Gam6itko\DpdCarrier\Type\Geography;

class Terminal extends AbstractParcelStore
{
    /** @var string */
    protected $terminalCode;

    /** @var string */
    protected $terminalName;

    /**
     * @return string
     */
    public function getTerminalCode()
    {
        return $this->terminalCode;
    }

    /**
     * @param string $terminalCode
     * @return Terminal
     */
    public function setTerminalCode($terminalCode)
    {
        $this->terminalCode = $terminalCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getTerminalName()
    {
        return $this->terminalName;
    }

    /**
     * @param string $terminalName
     * @return Terminal
     */
    public function setTerminalName($terminalName)
    {
        $this->terminalName = $terminalName;
        return $this;
    }
}