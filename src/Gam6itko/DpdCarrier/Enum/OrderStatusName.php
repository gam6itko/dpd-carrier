<?php

namespace Gam6itko\DpdCarrier\Enum;

final class OrderStatusName
{
    const OK = 'OK';
    const ORDER_PENDING = 'OrderPending';
    const ORDER_DUPLICATE = 'OrderDuplicate';
    const ORDER_ERROR = 'OrderError';
    const CANCELED = 'Canceled';
    const CANCELED_PREVIOUSLY = 'CanceledPreviously';
    const NOT_FOUND = 'NotFound';

    /** @deprecated use ORDER_PENDING */
    const OrderPending = 'OrderPending';
    /** @deprecated use ORDER_DUPLICATE */
    const OrderDuplicate = 'OrderDuplicate';
    /** @deprecated use ORDER_ERROR */
    const OrderError = 'OrderError';
    /** @deprecated use CANCELED */
    const Canceled = 'Canceled';
    /** @deprecated use CANCELED_PREVIOUSLY */
    const CanceledPreviously = 'CanceledPreviously';
    /** @deprecated use NOT_FOUND */
    const NotFound = 'NotFound';
}
