<?php

declare(strict_types=1);

namespace Cars;

/**
 * Class Car
 *
 * @package Cars
 */
class Car extends CarBase
{
    /** @var int */
    protected $passengerSeatsCount;

    /**
     * Get passenger seats count
     *
     * @return int
     */
    public function getPassengerSeatsCount(): int
    {
        return $this->passengerSeatsCount;
    }

    /**
     * Set passenger seats count
     *
     * @param int $passengerSeatsCount
     *
     * @return Car
     */
    public function setPassengerSeatsCount(int $passengerSeatsCount): Car
    {
        $this->passengerSeatsCount = $passengerSeatsCount;

        return $this;
    }

}