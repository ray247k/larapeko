<?php

namespace Ray247k\LaraPeko;

use Illuminate\Support\Facades\Facade;

class LaraPekoFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'LaraPeko';
    }
}
