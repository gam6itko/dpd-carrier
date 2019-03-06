<?php
namespace Gam6itko\DpdCarrier\Enum;

final class PaymentType
{
    /** @var string Наличными отправителем */
    const SenderCash = 'ОУО';

    /** @var null Оплата тправителя по безналичному расчёту. */
    const SenderCashless = null;

    /** @var string Наличными получателем */
    const ReceiverCash = 'ОУП';

    /** @deprecated v0.2.0 Use SenderCash */
    const Sender = 'ОУО';
    /** @deprecated v0.2.0 Use ReceiverCash */
    const Receiver = 'ОУП';
}
