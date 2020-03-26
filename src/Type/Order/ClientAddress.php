<?php

namespace Gam6itko\DpdCarrier\Type\Order;

use Gam6itko\DpdCarrier\Type\ArrayLike;

class ClientAddress extends ArrayLike
{
    /** @var string|null */
    protected $code;

    /** @var string|null */
    protected $name;

    /** @var string|null */
    protected $terminalCode;

    /** @var string|null */
    protected $addressString;

    /** @var string|null */
    protected $countryName;

    /** @var string|null */
    protected $index;

    /** @var string|null */
    protected $region;

    /** @var string|null */
    protected $city;

    /** @var string|null */
    protected $street;

    /** @var string|null */
    protected $streetAbbr;

    /** @var string|null */
    protected $house;

    /** @var string|null */
    protected $houseKorpus;

    /** @var string|null */
    protected $str;

    /** @var string|null */
    protected $vlad;

    /** @var string|null */
    protected $extraInfo;

    /** @var string|null */
    protected $office;

    /** @var string|null */
    protected $flat;

    /** @var string|null */
    protected $workTimeFrom;

    /** @var string|null */
    protected $workTimeTo;

    /** @var string|null */
    protected $dinnerTimeFrom;

    /** @var string|null */
    protected $dinnerTimeTo;

    /** @var string|null */
    protected $contactFio;

    /** @var string|null */
    protected $contactPhone;

    /** @var string|null */
    protected $contactEmail;

    /** @var string|null */
    protected $instructions;

    /** @var string|null */
    protected $needPass;

    /**
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * @param string|null $code
     *
     * @return ClientAddress
     */
    public function setCode(?string $code): ClientAddress
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     *
     * @return ClientAddress
     */
    public function setName(?string $name): ClientAddress
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTerminalCode(): ?string
    {
        return $this->terminalCode;
    }

    /**
     * @param string|null $terminalCode
     *
     * @return ClientAddress
     */
    public function setTerminalCode(?string $terminalCode): ClientAddress
    {
        $this->terminalCode = $terminalCode;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAddressString(): ?string
    {
        return $this->addressString;
    }

    /**
     * @param string|null $addressString
     *
     * @return ClientAddress
     */
    public function setAddressString(?string $addressString): ClientAddress
    {
        $this->addressString = $addressString;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCountryName(): ?string
    {
        return $this->countryName;
    }

    /**
     * @param string|null $countryName
     *
     * @return ClientAddress
     */
    public function setCountryName(?string $countryName): ClientAddress
    {
        $this->countryName = $countryName;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getIndex(): ?string
    {
        return $this->index;
    }

    /**
     * @param string|null $index
     *
     * @return ClientAddress
     */
    public function setIndex(?string $index): ClientAddress
    {
        $this->index = $index;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getRegion(): ?string
    {
        return $this->region;
    }

    /**
     * @param string|null $region
     *
     * @return ClientAddress
     */
    public function setRegion(?string $region): ClientAddress
    {
        $this->region = $region;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * @param string|null $city
     *
     * @return ClientAddress
     */
    public function setCity(?string $city): ClientAddress
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getStreet(): ?string
    {
        return $this->street;
    }

    /**
     * @param string|null $street
     *
     * @return ClientAddress
     */
    public function setStreet(?string $street): ClientAddress
    {
        $this->street = $street;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getStreetAbbr(): ?string
    {
        return $this->streetAbbr;
    }

    /**
     * @param string|null $streetAbbr
     *
     * @return ClientAddress
     */
    public function setStreetAbbr(?string $streetAbbr): ClientAddress
    {
        $this->streetAbbr = $streetAbbr;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getHouse(): ?string
    {
        return $this->house;
    }

    /**
     * @param string|null $house
     *
     * @return ClientAddress
     */
    public function setHouse(?string $house): ClientAddress
    {
        $this->house = $house;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getHouseKorpus(): ?string
    {
        return $this->houseKorpus;
    }

    /**
     * @param string|null $houseKorpus
     *
     * @return ClientAddress
     */
    public function setHouseKorpus(?string $houseKorpus): ClientAddress
    {
        $this->houseKorpus = $houseKorpus;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getStr(): ?string
    {
        return $this->str;
    }

    /**
     * @param string|null $str
     *
     * @return ClientAddress
     */
    public function setStr(?string $str): ClientAddress
    {
        $this->str = $str;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getVlad(): ?string
    {
        return $this->vlad;
    }

    /**
     * @param string|null $vlad
     *
     * @return ClientAddress
     */
    public function setVlad(?string $vlad): ClientAddress
    {
        $this->vlad = $vlad;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getExtraInfo(): ?string
    {
        return $this->extraInfo;
    }

    /**
     * @param string|null $extraInfo
     *
     * @return ClientAddress
     */
    public function setExtraInfo(?string $extraInfo): ClientAddress
    {
        $this->extraInfo = $extraInfo;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getOffice(): ?string
    {
        return $this->office;
    }

    /**
     * @param string|null $office
     *
     * @return ClientAddress
     */
    public function setOffice(?string $office): ClientAddress
    {
        $this->office = $office;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFlat(): ?string
    {
        return $this->flat;
    }

    /**
     * @param string|null $flat
     *
     * @return ClientAddress
     */
    public function setFlat(?string $flat): ClientAddress
    {
        $this->flat = $flat;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getWorkTimeFrom(): ?string
    {
        return $this->workTimeFrom;
    }

    /**
     * @param string|null $workTimeFrom
     *
     * @return ClientAddress
     */
    public function setWorkTimeFrom(?string $workTimeFrom): ClientAddress
    {
        $this->workTimeFrom = $workTimeFrom;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getWorkTimeTo(): ?string
    {
        return $this->workTimeTo;
    }

    /**
     * @param string|null $workTimeTo
     *
     * @return ClientAddress
     */
    public function setWorkTimeTo(?string $workTimeTo): ClientAddress
    {
        $this->workTimeTo = $workTimeTo;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDinnerTimeFrom(): ?string
    {
        return $this->dinnerTimeFrom;
    }

    /**
     * @param string|null $dinnerTimeFrom
     *
     * @return ClientAddress
     */
    public function setDinnerTimeFrom(?string $dinnerTimeFrom): ClientAddress
    {
        $this->dinnerTimeFrom = $dinnerTimeFrom;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDinnerTimeTo(): ?string
    {
        return $this->dinnerTimeTo;
    }

    /**
     * @param string|null $dinnerTimeTo
     *
     * @return ClientAddress
     */
    public function setDinnerTimeTo(?string $dinnerTimeTo): ClientAddress
    {
        $this->dinnerTimeTo = $dinnerTimeTo;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getContactFio(): ?string
    {
        return $this->contactFio;
    }

    /**
     * @param string|null $contactFio
     *
     * @return ClientAddress
     */
    public function setContactFio(?string $contactFio): ClientAddress
    {
        $this->contactFio = $contactFio;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getContactPhone(): ?string
    {
        return $this->contactPhone;
    }

    /**
     * @param string|null $contactPhone
     *
     * @return ClientAddress
     */
    public function setContactPhone(?string $contactPhone): ClientAddress
    {
        $this->contactPhone = $contactPhone;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getContactEmail(): ?string
    {
        return $this->contactEmail;
    }

    /**
     * @param string|null $contactEmail
     *
     * @return ClientAddress
     */
    public function setContactEmail(?string $contactEmail): ClientAddress
    {
        $this->contactEmail = $contactEmail;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getInstructions(): ?string
    {
        return $this->instructions;
    }

    /**
     * @param string|null $instructions
     *
     * @return ClientAddress
     */
    public function setInstructions(?string $instructions): ClientAddress
    {
        $this->instructions = $instructions;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNeedPass(): ?string
    {
        return $this->needPass;
    }

    /**
     * @param string|null $needPass
     *
     * @return ClientAddress
     */
    public function setNeedPass(?string $needPass): ClientAddress
    {
        $this->needPass = $needPass;
        return $this;
    }

}
