<?php

namespace Gam6itko\DpdCarrier\Enum;

final class PaymentType
{
    /** @var string Наличными отправителем */
    const SENDER_CASH = 'ОУО';
    /** @var null Оплата отправителя по безналичному расчёту. */
    const SENDER_CASHLESS = null;
    /** @var string Наличными получателем */
    const RECEIVER_CASH = 'ОУП';

    /** @deprecated v0.2.0 Use SENDER_CASH */
    const Sender = 'ОУО';
    /** @deprecated v0.2.0 Use RECEIVER_CASH */
    const Receiver = 'ОУП';

    /** @deprecated v0.2.0 Use SENDER_CASH */
    const SenderCash = 'ОУО';
    /** @deprecated v0.2.0 Use SENDER_CASHLESS */
    const SenderCashless = null;
    /** @deprecated v0.2.0 Use RECEIVER_CASH */
    const ReceiverCash = 'ОУП';
}
