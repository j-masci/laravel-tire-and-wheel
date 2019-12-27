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
     * For seeding database and other things as well.
     *
     * @param $column
     * @return int|mixed
     */
    public static function getRandomValue($column)
    {
        switch ($column) {
            case 'part_number':
                return TireOrRim::createRandomPartNumber( 't-' );
            case 'model_id':
                return LaravelHelpers::getRandomRecordColumn( TireModel::class, 'id' );
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
}
