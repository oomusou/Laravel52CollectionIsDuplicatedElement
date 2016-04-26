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
}