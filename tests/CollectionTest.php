<?php

use App\Services\CollectionDemo;

class CollectionTest extends TestCase
{
    /** @test */
    public function Collection含有重複Element()
    {
        /** arrange */
        $fake = collect([1, 1, 2, 3]);
        $target = App::make(CollectionDemo::class);

        /** act */
        $actual = $target->hasDuplicated($fake);

        /** assert */
        $this->assertTrue($actual);
    }

    /** @test */
    public function Element在Collection內重複()
    {
        /** arrange */
        $fake = collect([1, 1, 2, 3]);
        $target = App::make(CollectionDemo::class);

        /** act */
        $actual = $target->IsDuplicated($fake, 1);

        /** assert */
        $this->assertTrue($actual);
        
    }
}
