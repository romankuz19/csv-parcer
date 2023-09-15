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

    /**
     * @param array<string> $data
     *
     * @return static
     */
    public function setBaseCarInfo(array $data): CarBase
    {
        return $this
            ->setCarType($data[0])
            ->setBrand($data[1])
            ->setPhotoFileName($data[3])
            ->setCarrying((float) $data[5]);
    }
}