<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

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

    /**
     * For seeding database and other things as well.
     *
     * @param $column
     * @return int|mixed
     */
    public static function getRandomValue($column)
    {
        // todo: random seeding of values such as offset and bolt pattern will make it very hard to find products using real vehicle data.
        switch ($column) {
            case 'part_number':
                return TireOrRim::createRandomPartNumber( 'r-' );
            case 'finish_id':
                return LaravelHelpers::getRandomRecordColumn( RimFinish::class, 'id' );
            case 'width':
                return Arr::random([ "6.0", "6.5", "7.0", "7.5", "8.0", "8.5", "9.0" ]);
            case 'diameter':
                return Arr::random([14, 15, 16, 17, 18, 19, 20]);
            case 'offset':
                return rand( -150, 150 );
            case 'bolt_pattern_1':
            case 'bolt_pattern_2':
                return Arr::random([
                    '4x136',
                    '4x100',
                    '4x108',
                    '4x110',
                    '4x114.3',
                    '4x115',
                    '4x156',
                    '5x135',
                    '5x120.65',
                    '5x127',
                    '5x150',
                    '5x160',
                    '5x115',
                    '5x120',
                    '5x130',
                    '5x114.3',
                    '5x114',
                    '5x112',
                    '5x110',
                    '5x108',
                    '5x105',
                    '5x100',
                ]);
            case 'center_bore':
                return rand( 50, 150 );
        }

    }
}
