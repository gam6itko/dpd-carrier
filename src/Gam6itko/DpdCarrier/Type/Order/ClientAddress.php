<?php
namespace Gam6itko\DpdCarrier\Type\Order;

use Gam6itko\DpdCarrier\Type\Traits\ToArrayTrait;

class ClientAddress
{
    use ToArrayTrait;

    /** @var string */
    protected $code;

    /** @var string */
    protected $name;

    /** @var string */
    protected $terminalCode;

    /** @var string */
    protected $addressString;

    /** @var string */
    protected $countryName;

    /** @var string */
    protected $index;

    /** @var string */
    protected $region;

    /** @var string */
    protected $city;

    /** @var string */
    protected $street;

    /** @var string */
    protected $streetAbbr;

    /** @var string */
    protected $house;

    /** @var string */
    protected $houseKorpus;

    /** @var string */
    protected $str;

    /** @var string */
    protected $vlad;

    /** @var string */
    protected $extraInfo;

    /** @var string */
    protected $office;

    /** @var string */
    protected $flat;

    /** @var string */
    protected $workTimeFrom;

    /** @var string */
    protected $workTimeTo;

    /** @var string */
    protected $dinnerTimeFrom;

    /** @var string */
    protected $dinnerTimeTo;

    /** @var string */
    protected $contactFio;

    /** @var string */
    protected $contactPhone;

    /** @var string */
    protected $contactEmail;

    /** @var string */
    protected $instructions;

    /** @var string */
    protected $needPass;

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     * @return ClientAddress
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return ClientAddress
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getTerminalCode()
    {
        return $this->terminalCode;
    }

    /**
     * @param string $terminalCode
     * @return ClientAddress
     */
    public function setTerminalCode($terminalCode)
    {
        $this->terminalCode = $terminalCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddressString()
    {
        return $this->addressString;
    }

    /**
     * @param string $addressString
     * @return ClientAddress
     */
    public function setAddressString($addressString)
    {
        $this->addressString = $addressString;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountryName()
    {
        return $this->countryName;
    }

    /**
     * @param string $countryName
     * @return ClientAddress
     */
    public function setCountryName($countryName)
    {
        $this->countryName = $countryName;
        return $this;
    }

    /**
     * @return string
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * @param string $index
     * @return ClientAddress
     */
    public function setIndex($index)
    {
        $this->index = $index;
        return $this;
    }

    /**
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * @param string $region
     * @return ClientAddress
     */
    public function setRegion($region)
    {
        $this->region = $region;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @return ClientAddress
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param string $street
     * @return ClientAddress
     */
    public function setStreet($street)
    {
        $this->street = $street;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreetAbbr()
    {
        return $this->streetAbbr;
    }

    /**
     * @param string $streetAbbr
     * @return ClientAddress
     */
    public function setStreetAbbr($streetAbbr)
    {
        $this->streetAbbr = $streetAbbr;
        return $this;
    }

    /**
     * @return string
     */
    public function getHouse()
    {
        return $this->house;
    }

    /**
     * @param string $house
     * @return ClientAddress
     */
    public function setHouse($house)
    {
        $this->house = $house;
        return $this;
    }

    /**
     * @return string
     */
    public function getHouseKorpus()
    {
        return $this->houseKorpus;
    }

    /**
     * @param string $houseKorpus
     * @return ClientAddress
     */
    public function setHouseKorpus($houseKorpus)
    {
        $this->houseKorpus = $houseKorpus;
        return $this;
    }

    /**
     * @return string
     */
    public function getStr()
    {
        return $this->str;
    }

    /**
     * @param string $str
     * @return ClientAddress
     */
    public function setStr($str)
    {
        $this->str = $str;
        return $this;
    }

    /**
     * @return string
     */
    public function getVlad()
    {
        return $this->vlad;
    }

    /**
     * @param string $vlad
     * @return ClientAddress
     */
    public function setVlad($vlad)
    {
        $this->vlad = $vlad;
        return $this;
    }

    /**
     * @return string
     */
    public function getExtraInfo()
    {
        return $this->extraInfo;
    }

    /**
     * @param string $extraInfo
     * @return ClientAddress
     */
    public function setExtraInfo($extraInfo)
    {
        $this->extraInfo = $extraInfo;
        return $this;
    }

    /**
     * @return string
     */
    public function getOffice()
    {
        return $this->office;
    }

    /**
     * @param string $office
     * @return ClientAddress
     */
    public function setOffice($office)
    {
        $this->office = $office;
        return $this;
    }

    /**
     * @return string
     */
    public function getFlat()
    {
        return $this->flat;
    }

    /**
     * @param string $flat
     * @return ClientAddress
     */
    public function setFlat($flat)
    {
        $this->flat = $flat;
        return $this;
    }

    /**
     * @return string
     */
    public function getWorkTimeFrom()
    {
        return $this->workTimeFrom;
    }

    /**
     * @param string $workTimeFrom
     * @return ClientAddress
     */
    public function setWorkTimeFrom($workTimeFrom)
    {
        $this->workTimeFrom = $workTimeFrom;
        return $this;
    }

    /**
     * @return string
     */
    public function getWorkTimeTo()
    {
        return $this->workTimeTo;
    }

    /**
     * @param string $workTimeTo
     * @return ClientAddress
     */
    public function setWorkTimeTo($workTimeTo)
    {
        $this->workTimeTo = $workTimeTo;
        return $this;
    }

    /**
     * @return string
     */
    public function getDinnerTimeFrom()
    {
        return $this->dinnerTimeFrom;
    }

    /**
     * @param string $dinnerTimeFrom
     * @return ClientAddress
     */
    public function setDinnerTimeFrom($dinnerTimeFrom)
    {
        $this->dinnerTimeFrom = $dinnerTimeFrom;
        return $this;
    }

    /**
     * @return string
     */
    public function getDinnerTimeTo()
    {
        return $this->dinnerTimeTo;
    }

    /**
     * @param string $dinnerTimeTo
     * @return ClientAddress
     */
    public function setDinnerTimeTo($dinnerTimeTo)
    {
        $this->dinnerTimeTo = $dinnerTimeTo;
        return $this;
    }

    /**
     * @return string
     */
    public function getContactFio()
    {
        return $this->contactFio;
    }

    /**
     * @param string $contactFio
     * @return ClientAddress
     */
    public function setContactFio($contactFio)
    {
        $this->contactFio = $contactFio;
        return $this;
    }

    /**
     * @return string
     */
    public function getContactPhone()
    {
        return $this->contactPhone;
    }

    /**
     * @param string $contactPhone
     * @return ClientAddress
     */
    public function setContactPhone($contactPhone)
    {
        $this->contactPhone = $contactPhone;
        return $this;
    }

    /**
     * @return string
     */
    public function getContactEmail()
    {
        return $this->contactEmail;
    }

    /**
     * @param string $contactEmail
     * @return ClientAddress
     */
    public function setContactEmail($contactEmail)
    {
        $this->contactEmail = $contactEmail;
        return $this;
    }

    /**
     * @return string
     */
    public function getInstructions()
    {
        return $this->instructions;
    }

    /**
     * @param string $instructions
     * @return ClientAddress
     */
    public function setInstructions($instructions)
    {
        $this->instructions = $instructions;
        return $this;
    }

    /**
     * @return string
     */
    public function getNeedPass()
    {
        return $this->needPass;
    }

    /**
     * @param string $needPass
     * @return ClientAddress
     */
    public function setNeedPass($needPass)
    {
        $this->needPass = $needPass;
        return $this;
    }

}