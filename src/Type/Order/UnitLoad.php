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

    public function getArticle(): ?string
    {
        return $this->article;
    }

    public function setArticle(?string $article): UnitLoad
    {
        $this->article = $article;

        return $this;
    }

    public function getDescript(): ?string
    {
        return $this->descript;
    }

    public function setDescript(?string $descript): UnitLoad
    {
        $this->descript = $descript;

        return $this;
    }

    public function getDeclaredValue(): ?float
    {
        return $this->declared_value;
    }

    public function setDeclaredValue(?float $declared_value): UnitLoad
    {
        $this->declared_value = $declared_value;

        return $this;
    }

    public function getParcelNum(): ?string
    {
        return $this->parcel_num;
    }

    public function setParcelNum(?string $parcel_num): UnitLoad
    {
        $this->parcel_num = $parcel_num;

        return $this;
    }

    public function getNppAmount(): ?float
    {
        return $this->npp_amount;
    }

    public function setNppAmount(?float $npp_amount): UnitLoad
    {
        $this->npp_amount = $npp_amount;

        return $this;
    }

    public function getVatPercent(): ?float
    {
        return $this->vat_percent;
    }

    public function setVatPercent(?float $vat_percent): UnitLoad
    {
        $this->vat_percent = $vat_percent;

        return $this;
    }

    public function getWithoutVat(): ?float
    {
        return $this->without_vat;
    }

    public function setWithoutVat(?float $without_vat): UnitLoad
    {
        $this->without_vat = $without_vat;

        return $this;
    }

    public function getCount(): ?float
    {
        return $this->count;
    }

    public function setCount(?float $count): UnitLoad
    {
        $this->count = $count;

        return $this;
    }
}
