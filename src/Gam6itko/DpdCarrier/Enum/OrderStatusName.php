<?php

namespace Gam6itko\DpdCarrier\Enum;

final class OrderStatusName
{
    const OK = 'OK';
    const OrderPending = 'OrderPending';
    const OrderDuplicate = 'OrderDuplicate';
    const OrderError = 'OrderError';
    const Canceled = 'Canceled';
    const CanceledPreviously = 'CanceledPreviously';
    const NotFound = 'NotFound';
}
