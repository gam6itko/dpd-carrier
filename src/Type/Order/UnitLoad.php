<?php

namespace Gam6itko\DpdCarrier\Type\Order;

use Gam6itko\DpdCarrier\Type\ArrayLike;

class UnitLoad extends ArrayLike
{
    /** @var string|null */
    protected $article;

    /** @var string|null */
    protected $descript;

    /** @var float|null */
    protected $declared_value;

    /** @var string|null */
    protected $parcel_num;

    /** @var float|null */
    protected $npp_amount;

    /** @var float|null */
    protected $vat_percent;

    /** @var float|null */
    protected $without_vat;

    /** @var float|null */
    protected $count;

    /**
     * @return string|null
     */
    public function getArticle(): ?string
    {
        return $this->article;
    }

    /**
     * @param string|null $article
     *
     * @return UnitLoad
     */
    public function setArticle(?string $article): UnitLoad
    {
        $this->article = $article;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDescript(): ?string
    {
        return $this->descript;
    }

    /**
     * @param string|null $descript
     *
     * @return UnitLoad
     */
    public function setDescript(?string $descript): UnitLoad
    {
        $this->descript = $descript;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getDeclaredValue(): ?float
    {
        return $this->declared_value;
    }

    /**
     * @param float|null $declared_value
     *
     * @return UnitLoad
     */
    public function setDeclaredValue(?float $declared_value): UnitLoad
    {
        $this->declared_value = $declared_value;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getParcelNum(): ?string
    {
        return $this->parcel_num;
    }

    /**
     * @param string|null $parcel_num
     *
     * @return UnitLoad
     */
    public function setParcelNum(?string $parcel_num): UnitLoad
    {
        $this->parcel_num = $parcel_num;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getNppAmount(): ?float
    {
        return $this->npp_amount;
    }

    /**
     * @param float|null $npp_amount
     *
     * @return UnitLoad
     */
    public function setNppAmount(?float $npp_amount): UnitLoad
    {
        $this->npp_amount = $npp_amount;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getVatPercent(): ?float
    {
        return $this->vat_percent;
    }

    /**
     * @param float|null $vat_percent
     *
     * @return UnitLoad
     */
    public function setVatPercent(?float $vat_percent): UnitLoad
    {
        $this->vat_percent = $vat_percent;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getWithoutVat(): ?float
    {
        return $this->without_vat;
    }

    /**
     * @param float|null $without_vat
     *
     * @return UnitLoad
     */
    public function setWithoutVat(?float $without_vat): UnitLoad
    {
        $this->without_vat = $without_vat;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getCount(): ?float
    {
        return $this->count;
    }

    /**
     * @param float|null $count
     *
     * @return UnitLoad
     */
    public function setCount(?float $count): UnitLoad
    {
        $this->count = $count;
        return $this;
    }

}
