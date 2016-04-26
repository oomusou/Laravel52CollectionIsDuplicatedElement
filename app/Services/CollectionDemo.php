<?php

namespace App\Services;

use Illuminate\Support\Collection;

class CollectionDemo
{
    /**
     * @param Collection $cols
     * @return bool
     */
    public function hasDuplicated(Collection $cols) : bool
    {
        return ($cols->count() != $cols->unique()->count());
    }

    /**
     * @param Collection $cols
     * @param int $element
     * @return bool
     */
    public function IsDuplicated(Collection $cols, int $element) : bool
    {
        $cnt = $cols->filter(function (int $value) use ($element) {
            return ($value === $element);
        })->count();

        return ($cnt > 1);
    }
}