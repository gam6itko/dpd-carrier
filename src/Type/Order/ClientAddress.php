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

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): ClientAddress
    {
        $this->code = $code;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): ClientAddress
    {
        $this->name = $name;

        return $this;
    }

    public function getTerminalCode(): ?string
    {
        return $this->terminalCode;
    }

    public function setTerminalCode(?string $terminalCode): ClientAddress
    {
        $this->terminalCode = $terminalCode;

        return $this;
    }

    public function getAddressString(): ?string
    {
        return $this->addressString;
    }

    public function setAddressString(?string $addressString): ClientAddress
    {
        $this->addressString = $addressString;

        return $this;
    }

    public function getCountryName(): ?string
    {
        return $this->countryName;
    }

    public function setCountryName(?string $countryName): ClientAddress
    {
        $this->countryName = $countryName;

        return $this;
    }

    public function getIndex(): ?string
    {
        return $this->index;
    }

    public function setIndex(?string $index): ClientAddress
    {
        $this->index = $index;

        return $this;
    }

    public function getRegion(): ?string
    {
        return $this->region;
    }

    public function setRegion(?string $region): ClientAddress
    {
        $this->region = $region;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): ClientAddress
    {
        $this->city = $city;

        return $this;
    }

    public function getStreet(): ?string
    {
        return $this->street;
    }

    public function setStreet(?string $street): ClientAddress
    {
        $this->street = $street;

        return $this;
    }

    public function getStreetAbbr(): ?string
    {
        return $this->streetAbbr;
    }

    public function setStreetAbbr(?string $streetAbbr): ClientAddress
    {
        $this->streetAbbr = $streetAbbr;

        return $this;
    }

    public function getHouse(): ?string
    {
        return $this->house;
    }

    public function setHouse(?string $house): ClientAddress
    {
        $this->house = $house;

        return $this;
    }

    public function getHouseKorpus(): ?string
    {
        return $this->houseKorpus;
    }

    public function setHouseKorpus(?string $houseKorpus): ClientAddress
    {
        $this->houseKorpus = $houseKorpus;

        return $this;
    }

    public function getStr(): ?string
    {
        return $this->str;
    }

    public function setStr(?string $str): ClientAddress
    {
        $this->str = $str;

        return $this;
    }

    public function getVlad(): ?string
    {
        return $this->vlad;
    }

    public function setVlad(?string $vlad): ClientAddress
    {
        $this->vlad = $vlad;

        return $this;
    }

    public function getExtraInfo(): ?string
    {
        return $this->extraInfo;
    }

    public function setExtraInfo(?string $extraInfo): ClientAddress
    {
        $this->extraInfo = $extraInfo;

        return $this;
    }

    public function getOffice(): ?string
    {
        return $this->office;
    }

    public function setOffice(?string $office): ClientAddress
    {
        $this->office = $office;

        return $this;
    }

    public function getFlat(): ?string
    {
        return $this->flat;
    }

    public function setFlat(?string $flat): ClientAddress
    {
        $this->flat = $flat;

        return $this;
    }

    public function getWorkTimeFrom(): ?string
    {
        return $this->workTimeFrom;
    }

    public function setWorkTimeFrom(?string $workTimeFrom): ClientAddress
    {
        $this->workTimeFrom = $workTimeFrom;

        return $this;
    }

    public function getWorkTimeTo(): ?string
    {
        return $this->workTimeTo;
    }

    public function setWorkTimeTo(?string $workTimeTo): ClientAddress
    {
        $this->workTimeTo = $workTimeTo;

        return $this;
    }

    public function getDinnerTimeFrom(): ?string
    {
        return $this->dinnerTimeFrom;
    }

    public function setDinnerTimeFrom(?string $dinnerTimeFrom): ClientAddress
    {
        $this->dinnerTimeFrom = $dinnerTimeFrom;

        return $this;
    }

    public function getDinnerTimeTo(): ?string
    {
        return $this->dinnerTimeTo;
    }

    public function setDinnerTimeTo(?string $dinnerTimeTo): ClientAddress
    {
        $this->dinnerTimeTo = $dinnerTimeTo;

        return $this;
    }

    public function getContactFio(): ?string
    {
        return $this->contactFio;
    }

    public function setContactFio(?string $contactFio): ClientAddress
    {
        $this->contactFio = $contactFio;

        return $this;
    }

    public function getContactPhone(): ?string
    {
        return $this->contactPhone;
    }

    public function setContactPhone(?string $contactPhone): ClientAddress
    {
        $this->contactPhone = $contactPhone;

        return $this;
    }

    public function getContactEmail(): ?string
    {
        return $this->contactEmail;
    }

    public function setContactEmail(?string $contactEmail): ClientAddress
    {
        $this->contactEmail = $contactEmail;

        return $this;
    }

    public function getInstructions(): ?string
    {
        return $this->instructions;
    }

    public function setInstructions(?string $instructions): ClientAddress
    {
        $this->instructions = $instructions;

        return $this;
    }

    public function getNeedPass(): ?string
    {
        return $this->needPass;
    }

    public function setNeedPass(?string $needPass): ClientAddress
    {
        $this->needPass = $needPass;

        return $this;
    }
}
