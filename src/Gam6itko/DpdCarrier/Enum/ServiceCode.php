<?php
namespace Gam6itko\DpdCarrier\Enum;

final class ServiceCode
{
    /** DPD 18:00 */
    const BZP = 'BZP';
    /** DPD ECONOMY */
    const ECN = 'ECN';
    /** DPD CLASSIC */
    const CUR = 'CUR';
    /** DPD EXPRESS */
    const NDY = 'NDY';
    /** DPD Online Express */
    const CSM = 'CSM';
    /** DPD Online Classic */
    const PCL = 'PCL';
    /** DPD CLASSIC international IMPORT */
    const DPI = 'DPI';
    /** DPD CLASSIC international EXPORT */
    const DPE = 'DPE';
    /** DPD MAX domestic */
    const MAX = 'MAX';
    /** DPD Shop to Shop */
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
