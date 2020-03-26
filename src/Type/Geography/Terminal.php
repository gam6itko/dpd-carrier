<?php

namespace Gam6itko\DpdCarrier\Type\Geography;

class Terminal extends AbstractParcelStore
{
    /** @var string|null */
    protected $terminalCode;

    /** @var string|null */
    protected $terminalName;

    public function getCode(): ?string
    {
        return $this->getTerminalCode();
    }

    public function getTerminalCode(): ?string
    {
        return $this->terminalCode;
    }

    public function setTerminalCode(?string $terminalCode): Terminal
    {
        $this->terminalCode = $terminalCode;

        return $this;
    }

    public function getTerminalName(): ?string
    {
        return $this->terminalName;
    }

    public function setTerminalName(?string $terminalName): Terminal
    {
        $this->terminalName = $terminalName;

        return $this;
    }
}
