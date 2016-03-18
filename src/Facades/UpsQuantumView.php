<?php

namespace Rooferz\LaravelUpsApi\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * This is the QuantumView facade class.
 *
 * @author Pierre Tondereau <pierre@doers.fr>
 */
class UpsQuantumView extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'ups.quantum-view';
    }
}