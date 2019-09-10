<?php

namespace DariusIII\Zipper\Facades;

use Illuminate\Support\Facades\Facade;

class Zipper extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'zipper';
    }
}
