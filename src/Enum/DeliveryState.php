<?php

namespace Gam6itko\DpdCarrier\Enum;

final class DeliveryState
{
    const NEW_ORDER_BY_CLIENT = 'NewOrderByClient';
    const NOT_DONE = 'NotDone';
    const ON_TERMINAL_PICKUP = 'OnTerminalPickup';
    const ON_ROAD = 'OnRoad';
    const ON_TERMINAL = 'OnTerminal';
    const ON_TERMINAL_DELIVERY = 'OnTerminalDelivery';
    const DELIVERING = 'Delivering';
    const DELIVERED = 'Delivered';
    const LOST = 'Lost';
    const PROBLEM = 'Problem';
    const RETURNED_FROM_DELIVERY = 'ReturnedFromDelivery';
    const NEW_ORDER_BY_DPD = 'NewOrderByDPD';

    /** @deprecated use NEW_ORDER_BY_CLIENT */
    const NewOrderByClient = 'NewOrderByClient';
    /** @deprecated use NOT_DONE */
    const NotDone = 'NotDone';
    /** @deprecated use ON_TERMINAL_PICKUP */
    const OnTerminalPickup = 'OnTerminalPickup';
    /** @deprecated use ON_ROAD */
    const OnRoad = 'OnRoad';
    /** @deprecated use ON_TERMINAL */
    const OnTerminal = 'OnTerminal';
    /** @deprecated use ON_TERMINAL_DELIVERY */
    const OnTerminalDelivery = 'OnTerminalDelivery';
    /** @deprecated use DELIVERING */
    const Delivering = 'Delivering';
    /** @deprecated use NEW_ORDER_BY_CLIENT */
    const Delivered = 'Delivered';
    /** @deprecated use LOST */
    const Lost = 'Lost';
    /** @deprecated use PROBLEM */
    const Problem = 'Problem';
    /** @deprecated use RETURNED_FROM_DELIVERY */
    const ReturnedFromDelivery = 'ReturnedFromDelivery';
    /** @deprecated use NEW_ORDER_BY_DPD */
    const NewOrderByDPD = 'NewOrderByDPD';
}
