<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class RimFinish extends Model
{
    protected $table = 'rim_finishes';

    /**
     * For seeding database and other things as well.
     *
     * @param $column
     * @return int|mixed
     */
    public static function generateRandomValue($column)
    {
        switch ($column) {
            case 'name':
                return implode( " ", Arr::random( [ 'Black', 'Silver', 'Blue', 'Machined Face', 'Gloss Black', 'Purple', 'Grey', 'Chrome' ], 2 ) );
            case 'model_id':
                return \Core\Helpers\getRandomRecordColumn( \App\RimModel::class, 'id', null );
        }
    }

}
