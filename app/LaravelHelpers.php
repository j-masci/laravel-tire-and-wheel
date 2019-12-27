<?php

namespace App;

Class LaravelHelpers{

    /**
     * Mainly exists to prevent errors when a database table is empty.
     *
     * @param $table
     * @param $column
     * @param null $default
     * @return null
     */
    public static function getRandomRecordColumn( $table, $column, $default = null ){
        $record = $table::query()->limit(1)->inRandomOrder()->get()->first();
        return $record && isset( $record->{$column} ) ? $record->{$column} : $default;
    }

}
