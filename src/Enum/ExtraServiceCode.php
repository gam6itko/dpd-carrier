<?php

namespace Gam6itko\DpdCarrier\Enum;

final class ExtraServiceCode
{
    /**
     * @var string SMS уведомление получателя о приёме посылки у отправителя и о выходе посылки на доставку<br><br>
     *
     * Parameters:<br>
     * <b>phone</b> - Телефон получателя для отправки уведомления<br>
     */
    const SMS = 'SMS';

    /**
     * @var string E-mail уведомление получателя о приёме посылки у отправителя и о выходе посылки на доставку<br><br>
     *
     * Parameters:<br>
     * <b>email</b> - E-mail получателя для отправки уведомления<br>
     */
    const EML = 'EML';

    /**
     * @var string Электронное сообщение о доставке груза получателю<br><br>
     *
     * Parameters:<br>
     * <b>email</b> - E-mail, на который нужно отправить сообщение о доставке груза<br>
     */
    const ESD = 'ЭСД';

    /**
     * @var string Электронное сообщение о приёме заказа<br><br>
     *
     * Parameters:<br>
     * <b>email</b> - E-mail, на который нужно отправить сообщение о приёме заказа<br>
     */
    const ESZ = 'ЭСЗ';

    /**
     * @var string Возврат документов отправителю. Если клиенту необходимо вернуть сопроводительные документы на груз (товарную накладную,
     *             акты приема-передачи), заверенные получателем.<br><br>
     *
     * Платная<br><br>
     */
    const VDO = 'ВДО';

    /**
     * @var string Доставка в выходные дни.
     *             Эта опция, позволяющая осуществить доставку отправки получателю в соответствии со сроком доставки ТК, но раньше даты,
     *             рассчитанной по стандартным правилам, при условии, что итоговая дата доставки придется на выходной день.<br><br>
     *
     * Платная<br><br>
     */
    const DVD = 'ДВД';

    /**
     * @var string Наложенный платеж<br><br>
     *
     * Платная<br><br>
     *
     * Parameters:<br>
     * <b>sum_npp</b> - Cумма наложенного платежа <i>(Данный параметр можно использовать только для доставки в страны таможенного союза.(Не для России))</i><br>
     */
    const NPP = 'НПП';

    /**
     * @var string Подтверждение о доставке<br><br>
     *
     * Платная<br><br>
     *
     * Parameters:<br>
     * <b>email/fax</b> - E-mail или факс, на который нужно отправить подтверждение о доставке<br>
     */
    const POD = 'ПОД';

    /**
     * @var string Погрузо-разгрузочные работы при доставке.
     *             Если необходимо организовать разгрузку и доставку поступивших посылок в то или иное помещение на территории,
     *             независимо от того, на каком этаже оно расположено.<br><br>
     *
     * Платная<br><br>
     */
    const PRD = 'ПРД';

    /**
     * @var string Температурный режим<br><br>
     *
     * Платная<br><br>
     */
    const TRM = 'ТРМ';

    /**
     * @var string Ожидание на адресе<br><br>
     *
     * Платная<br><br>
     *
     * Parameters:<br>
     * <b>reason_delay</b> - Причина ожидания на адресе: [
     *      ПРИМ: С примеркой;
     *      ПРОС: Простая;
     *      РАБТ: С проверкой работоспособности
     * ]<br>
     */
    const OZD = 'ОЖД';

    /**
     * @var string Возврат части отправки<br><br>
     *
     * Платная<br><br>
     *
     * Parameters:<br>
     * <b>goods_return_amount</b> - Минимальная сумма выкупа (не обязателен)<br>
     * <b>delivery_amount</b> - Сумма за доставку<br>
     * <b>reason_delay_rps</b> - Тип проверки комплектности<br>
     */
    const CST = 'ЧСТ';

    /**
     * @var string Обрешетка - жесткая упаковка грузового места/посылки, представляющая деревянный каркас и
     *             предназначающаяся для перевозки хрупких и нестандартных грузов.<br><br>
     *
     * Платная<br><br>
     */
    const OBR = 'ОБР';

    /**
     * @var string Доставка крупногабаритных посылок<br><br>
     *
     * Платная<br><br>
     */
    const KGT = 'КГТ';
}