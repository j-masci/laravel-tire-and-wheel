<?php

namespace App\Models;

/**
 * Models\Tire and Models\Rim will use this.
 *
 * Trait TireOrRim
 */
Trait TireOrRim{

    /**
     * Generate a random part number.
     *
     * @param string $pre
     * @return string
     */
    public static function generateRandomPartNumber($pre = "" ){

        // uniqid can sometimes return the same number when called in quick succession.
        global $partNumberGeneratorGlobalCounter;
        $partNumberGeneratorGlobalCounter = $partNumberGeneratorGlobalCounter ? $partNumberGeneratorGlobalCounter : 0;
        $partNumberGeneratorGlobalCounter++;

        return $pre . substr( md5 ($partNumberGeneratorGlobalCounter . uniqid() ), 0, 16 );
    }

}
