<?php

namespace Gam6itko\DpdCarrier\Enum;

final class ServiceVariant
{
    const TERMINAL_TO_TERMINAL = 'ТТ';
    const TERMINAL_TO_HOUSE = 'ТД';
    const HOUSE_TO_HOUSE = 'ДД';
    const HOUSE_TO_TERMINAL = 'ДТ';

    /** @deprecated v0.2.0 Use TERMINAL_TO_TERMINAL */
    const TerminalToTerminal = 'ТТ';
    /** @deprecated v0.2.0 Use TERMINAL_TO_HOUSE */
    const TerminalToHouse = 'ТД';
    /** @deprecated v0.2.0 Use HOUSE_TO_HOUSE */
    const HouseToHouse = 'ДД';
    /** @deprecated v0.2.0 Use HOUSE_TO_TERMINAL */
    const HouseToTerminal = 'ДТ';
}
