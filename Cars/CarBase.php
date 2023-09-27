<?php

declare(strict_types=1);

namespace Cars;

/**
 * Abstract Class CarBase
 *
 * @package Cars
 */
abstract class CarBase
{
    /** @var string */
    protected $carType;
    /** @var string */
    protected $brand;
    /** @var string */
    protected $photoFileName;
    /** @var float */
    protected $carrying;

    /**
     * CarBase constructor
     *
     * @param $carType
     * @param $brand
     * @param $photoFileName
     * @param $carrying
     */
    public function __construct($carType, $brand, $photoFileName, $carrying)
    {
        $this->setCarType($carType)->setBrand($brand)->setPhotoFileName($photoFileName)->setCarrying($carrying);
    }

    /**
     * Get car type
     *
     * @return string
     */
    public function getCarType(): string
    {
        return $this->carType;
    }

    /**
     * Set car type
     *
     * @param string $carType
     *
     * @return static
     */
    public function setCarType(string $carType): CarBase
    {
        $this->carType = $carType;

        return $this;
    }

    /**
     * Get brand
     *
     * @return string
     */
    public function getBrand(): string
    {
        return $this->brand;
    }

    /**
     * Set brand
     *
     * @param string $brand
     *
     * @return static
     */
    public function setBrand(string $brand): CarBase
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get photo file name
     *
     * @return string
     */
    public function getPhotoFileName(): string
    {
        return $this->photoFileName;
    }

    /**
     * Set photo file name
     *
     * @param string $photoFileName
     *
     * @return static
     */
    public function setPhotoFileName(string $photoFileName): CarBase
    {
        $this->photoFileName = $photoFileName;

        return $this;
    }

    /**
     * Get carrying
     *
     * @return float
     */
    public function getCarrying(): float
    {
        return $this->carrying;
    }

    /**
     * Set carrying
     *
     * @param float $carrying
     *
     * @return static
     */
    public function setCarrying(float $carrying): CarBase
    {
        $this->carrying = $carrying;

        return $this;
    }

    /**
     * Get photo file extension
     *
     * @return string
     */
    public function getPhotoFileExt(): string
    {
        list(, $ext) = explode('.', $this->photoFileName);
        return '.' . $ext;
    }

}