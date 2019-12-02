<?php
namespace Gmsth\Rules\Facade;

use  Illuminate\Support\Facades\Facade;

class Rule extends Facade{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'rule'; }
}