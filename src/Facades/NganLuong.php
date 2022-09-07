<?php
/**
 * @Author TungND
 * @Date   Sep 07, 2022
 */

namespace Laravel\NganLuong\Facades;

use Illuminate\Support\Facades\Facade;

class NganLuong extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'client_nl';
    }
}
