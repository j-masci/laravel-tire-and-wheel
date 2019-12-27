<?php
/**
 * For now, generic helper functions for laravel or php. If this
 * gets big or messy, will probably move some things around.
 *
 * Avoid business logic here.
 */

namespace Core\Helpers;

/**
 * Get a random column value from a random record in a table.
 *
 * For example, we can use this to assign a tire to a random tire model.
 *
 * @param $model
 * @param $column
 * @param null $default
 * @return mixed
 */
function getRandomRecordColumn( $model, $column, $default = null ){
    $record = $model::query()->limit(1)->inRandomOrder()->get()->first();
    return $record && isset( $record->{$column} ) ? $record->{$column} : $default;
}

