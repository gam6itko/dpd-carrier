<?php
namespace Gam6itko\DpdCarrier\Enum;

final class ServiceCode
{
    /** @var string DPD 18:00 */
    const BZP = 'BZP';
    /** @var string DPD ECONOMY */
    const ECN = 'ECN';
    /** @var string DPD CLASSIC */
    const CUR = 'CUR';
    /** @var string DPD EXPRESS */
    const NDY = 'NDY';
    /** @var string DPD Online Express */
    const CSM = 'CSM';
    /** @var string DPD Online Classic */
    const PCL = 'PCL';
    /** @var string DPD CLASSIC international IMPORT */
    const DPI = 'DPI';
    /** @var string DPD CLASSIC international EXPORT */
    const DPE = 'DPE';
    /** @var string DPD MAX domestic */
    const MAX = 'MAX';
    /** @var string DPD Shop to Shop */
//    const PUP = 'PUP';

    /**
     * @return array
     */
    public static function getDescriptions()
    {
        return [
            'BZP' => 'DPD 18:00',
            'ECN' => 'DPD ECONOMY',
            'CUR' => 'DPD CLASSIC',
            'NDY' => 'DPD EXPRESS',
            'CSM' => 'DPD Online Express',
            'PCL' => 'DPD Online Classic',
            'DPI' => 'DPD CLASSIC international IMPORT',
            'DPE' => 'DPD CLASSIC international EXPORT',
            'MAX' => 'DPD MAX domestic',
//            'PUP' => 'DPD Shop to Shop'
        ];
    }
}
