<?php
namespace Gam6itko\DpdCarrier\Enum;

final class DeliveryState
{
    const NewOrderByClient = 'NewOrderByClient';
    const NotDone = 'NotDone';
    const OnTerminalPickup = 'OnTerminalPickup';
    const OnRoad = 'OnRoad';
    const OnTerminal = 'OnTerminal';
    const OnTerminalDelivery = 'OnTerminalDelivery';
    const Delivering = 'Delivering';
    const Delivered = 'Delivered';
    const Lost = 'Lost';
    const Problem = 'Problem';
    const ReturnedFromDelivery = 'ReturnedFromDelivery';
    const NewOrderByDPD = 'NewOrderByDPD';
}
