<?php
namespace Gam6itko\DpdCarrier\Type\Geography;

use Gam6itko\DpdCarrier\Type\AbstractDeliveryPoint;

class Address extends AbstractDeliveryPoint
{
    /** @var string */
    protected $regionName;

    /** @var string */
    protected $street;

    /** @var string */
    protected $streetAbbr;

    /** @var string */
    protected $houseNo;

    /** @var string */
    protected $building;

    /** @var string */
    protected $structure;

    /** @var string */
    protected $ownership;
    /** @var string */
    protected $descript;
}