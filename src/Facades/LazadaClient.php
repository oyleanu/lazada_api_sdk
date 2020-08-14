<?php
namespace Oyleanu\LazadaClient\Facades;

use Illuminate\Support\Facades\Facade;

class LazadaClient extends Facade
{
    /**
     * Get the registered name of the component.
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'lazopClient';
    }
}