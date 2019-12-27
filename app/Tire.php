<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Tire extends Model
{
    use TireOrRim;

    protected $table = 'tires';
    protected $isTire = true;
    protected $isRim = false;

    /**
     * Default values.
     *
     * @var array
     */
    protected $attributes = [
        'load_index_2' => '',
    ];

    /**
     * For database seeding mostly.
     *
     * @param $column
     * @return int|mixed
     */
    public static function createRandomColumnValue($column)
    {

        switch ($column) {
            case 'part_number':
                return 't-' . uniqid('asdf');
            case 'model_id':
                break;
            case 'width':
                return Arr::random([165, 175, 185, 195, 205, 215, 225]);
            case 'profile':
                return Arr::random([50, 55, 60, 65, 70, 75]);
            case 'diameter':
                return Arr::random([14, 15, 16, 17, 18, 19, 20]);
            case 'speed_rating':
                $speed_ratings = 'e,f,g,j,k,l,m,n,p,q,r,s,t,u,h,v,w,y';
                return Arr::random(explode(',', strtoupper($speed_ratings)));
            case 'load_index_1':
            case 'load_index_2':
                return rand(80, 110);
            case 'type':
                return Arr::random(['winter', 'summer', 'all-season', 'all-weather']);
        }

    }

    /**
     *
     */
    public function createRandomSelf()
    {
        $attributes = [];

        $rnd = [
            'part_number',
            'model_id',
            'width',
            'profile',
            'diameter',
            'type',
            'load_index_1',
            'speed_rating',
        ];

        foreach ( $rnd as $key) {
            $attributes[$key] = self::createRandomColumnValue($key);
        }

        return new self( $attributes );
    }
}
