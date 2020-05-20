<?php

namespace Gam6itko\DpdCarrier\Enum;

final class ServiceCode
{
    /** @var string DPD 18:00 */
    const BZP = 'BZP';
    /** @var string DPD ECONOMY */
    const ECN = 'ECN';
    /** @var string DPD ECONOMY CU */
    const ECU = 'ECU';
    /** @var string DPD CLASSIC */
    const CUR = 'CUR';
    /** @var string DPD EXPRESS */
    const NDY = 'NDY';
    /** @var string DPD Online Express */
    const CSM = 'CSM';
    /** @var string DPD OPTIMUM */
    const PCL = 'PCL';
    /** @var string DPD Shop to Shop */
    const PUP = 'PUP';
    /** @var string DPD CLASSIC international IMPORT */
    const DPI = 'DPI';
    /** @var string DPD CLASSIC international EXPORT */
    const DPE = 'DPE';
    /** @var string DPD MAX domestic */
    const MAX = 'MAX';
    /** @var string DPD Online Max */
    const MXO = 'MXO';

    /**
     * @return array
     */
    public static function getDescriptions()
    {
        return [
            'BZP' => 'DPD 18:00',
            'ECN' => 'DPD ECONOMY',
            'ECU' => 'DPD ECONOMY CU',
            'CUR' => 'DPD CLASSIC',
            'NDY' => 'DPD EXPRESS',
            'CSM' => 'DPD Online Express',
            'PCL' => 'DPD OPTIMUM',
            'PUP' => 'DPD Shop to Shop',
            'DPI' => 'DPD CLASSIC international IMPORT',
            'DPE' => 'DPD CLASSIC international EXPORT',
            'MAX' => 'DPD MAX domestic',
            'MXO' => 'DPD Online Max',
        ];
    }
}
