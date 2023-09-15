<?php

declare(strict_types=1);

namespace Cars;

/**
 * Class SpecMachine
 *
 * @package Cars
 */
class SpecMachine extends CarBase
{
    /** @var string */
    protected $extra;

    /**
     * Get extra information
     *
     * @return string
     */
    public function getExtra(): string
    {
        return $this->extra;
    }

    /**
     * Set extra information
     *
     * @param string $extra
     *
     * @return SpecMachine
     */
    public function setExtra(string $extra): SpecMachine
    {
        $this->extra = $extra;

        return $this;
    }
}