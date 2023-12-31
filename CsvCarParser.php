<?php

declare(strict_types=1);

use Cars\{
    CarBase,
    Car,
    Truck,
    SpecMachine,
};

require("./Cars/CarBase.php");
require("./Cars/Car.php");
require("./Cars/Truck.php");
require("./Cars/SpecMachine.php");

/**
 * Resolves and returns car object by data
 *
 * @param array<mixed> $data
 *
 * @return CarBase|null
 */
function resolveCarByData(array $data): ?CarBase
{
    switch ($data[0]) {
        case 'car':
            if ($data[2] != "") {
                return (new Car($data[0], $data[1], $data[3], (float) $data[5]))->setPassengerSeatsCount((int) $data[2]);
            }
            break;
        case 'truck':
            return (new Truck($data[0], $data[1], $data[3], (float) $data[5]))->bodyWhlResolver($data[4]);
        case 'spec_machine':
            if ($data[6] != "") {
                return (new SpecMachine($data[0], $data[1], $data[3], (float) $data[5]))->setExtra($data[6]);
            }
            break;
        default:
            return null;
    }

    return null;
}

/**
 * Get car list from csv file
 *
 * @param string $csvFileName
 *
 * @return array<CarBase>
 */
function getCarList(string $csvFileName): array
{
    $carList = [];
    $fp = fopen($csvFileName, "r");
    if ($fp !== false) {
        while ($data = fgetcsv($fp, 10000, ";")) {
            if (count($data) == 7 && $data[1] != "" && $data[3] != "" && $data[5] != "") {
                $resolvedCar = resolveCarByData($data);
                if ($resolvedCar instanceof CarBase) {
                    $carList[] = $resolvedCar;
                }
            }
        }
        fclose($fp);
    }
    return $carList;
}

print_r(getCarList("cars.csv"));