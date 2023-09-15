<?php

declare(strict_types=1);

namespace Cars;

/**
 * Class Truck
 *
 * @package Cars
 */
class Truck extends CarBase
{
    /** @var float */
    protected $bodyWidth;
    /** @var float */
    protected $bodyHeight;
    /** @var float */
    protected $bodyLength;

    /**
     * Get body width
     *
     * @return float
     */
    public function getBodyWidth(): float
    {
        return $this->bodyWidth;
    }

    /**
     * Set body width
     *
     * @param float $bodyWidth
     *
     * @return Truck
     */
    public function setBodyWidth(float $bodyWidth): Truck
    {
        $this->bodyWidth = $bodyWidth;

        return $this;
    }

    /**
     * Get body height
     *
     * @return float
     */
    public function getBodyHeight(): float
    {
        return $this->bodyHeight;
    }

    /**
     * Set body height
     *
     * @param float $bodyHeight
     *
     * @return Truck
     */
    public function setBodyHeight(float $bodyHeight): Truck
    {
        $this->bodyHeight = $bodyHeight;

        return $this;
    }

    /**
     * Get body length
     *
     * @return float
     */
    public function getBodyLength(): float
    {
        return $this->bodyLength;
    }

    /**
     * Set body length
     *
     * @param float $bodyLength
     *
     * @return Truck
     */
    public function setBodyLength(float $bodyLength): Truck
    {
        $this->bodyLength = $bodyLength;

        return $this;
    }

    /**
     * Get body volume
     *
     * @return float
     */
    public function getBodyVolume(): float
    {
        return $this->bodyWidth * $this->bodyLength * $this->bodyHeight;
    }

    /**
     * Resolve and set body width, height and length
     *
     * @param string $bodyWhl
     *
     * @return Truck
     */
    public function bodyWhlResolver(string $bodyWhl): Truck
    {
        $parameters = explode('x', $bodyWhl);
        if ($parameters == [""]) {
            $this->setBodyWidth(0)->setBodyHeight(0)->setBodyLength(0);
        } else {
            $this
                ->setBodyWidth(floatval($parameters[0]))
                ->setBodyHeight(floatval($parameters[1]))
                ->setBodyLength(floatval($parameters[2]));
        }

        return $this;
    }
}