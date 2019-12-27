<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rim extends Model
{
    use TireOrRim;

    protected $table = 'rims';
    protected $isRim = true;
    protected $isTire = false;

    /**
     * Default values.
     *
     * @var array
     */
    protected $attributes = [
        'bolt_pattern_2' => '',
    ];

    public function makeRandomSelf(){

    }
}
