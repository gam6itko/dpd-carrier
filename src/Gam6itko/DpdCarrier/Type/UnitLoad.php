<?php
namespace Gam6itko\DpdCarrier\Type;

class UnitLoad
{
    /** @var string */
    protected $article;

    /** @var string */
    protected $descript;

    /** @var float */
    protected $declared_value;

    /** @var string */
    protected $parcel_num;

    /** @var float */
    protected $npp_amount;

    /** @var float */
    protected $vat_percent;

    /** @var float */
    protected $without_vat;

    /** @var float */
    protected $count;

    /**
     * @return string
     */
    public function getArticle()
    {
        return $this->article;
    }

    /**
     * @param string $article
     * @return UnitLoad
     */
    public function setArticle($article)
    {
        $this->article = $article;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescript()
    {
        return $this->descript;
    }

    /**
     * @param string $descript
     * @return UnitLoad
     */
    public function setDescript($descript)
    {
        $this->descript = $descript;
        return $this;
    }

    /**
     * @return float
     */
    public function getDeclaredValue()
    {
        return $this->declared_value;
    }

    /**
     * @param float $declared_value
     * @return UnitLoad
     */
    public function setDeclaredValue($declared_value)
    {
        $this->declared_value = $declared_value;
        return $this;
    }

    /**
     * @return string
     */
    public function getParcelNum()
    {
        return $this->parcel_num;
    }

    /**
     * @param string $parcel_num
     * @return UnitLoad
     */
    public function setParcelNum($parcel_num)
    {
        $this->parcel_num = $parcel_num;
        return $this;
    }

    /**
     * @return float
     */
    public function getNppAmount()
    {
        return $this->npp_amount;
    }

    /**
     * @param float $npp_amount
     * @return UnitLoad
     */
    public function setNppAmount($npp_amount)
    {
        $this->npp_amount = $npp_amount;
        return $this;
    }

    /**
     * @return float
     */
    public function getVatPercent()
    {
        return $this->vat_percent;
    }

    /**
     * @param float $vat_percent
     * @return UnitLoad
     */
    public function setVatPercent($vat_percent)
    {
        $this->vat_percent = $vat_percent;
        return $this;
    }

    /**
     * @return float
     */
    public function getWithoutVat()
    {
        return $this->without_vat;
    }

    /**
     * @param float $without_vat
     * @return UnitLoad
     */
    public function setWithoutVat($without_vat)
    {
        $this->without_vat = $without_vat;
        return $this;
    }

    /**
     * @return float
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @param float $count
     * @return UnitLoad
     */
    public function setCount($count)
    {
        $this->count = $count;
        return $this;
    }
}