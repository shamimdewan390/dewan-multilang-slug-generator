<?php

namespace Shamim\DewanMultilangSlug\Facades;

use Illuminate\Support\Facades\Facade;


class MultilangSlug extends Facade
{
    /**
     * Get the registered name of the component.
     * @return string
     *
     * @throws \RuntimeException
     */
    protected static function getFacadeAccessor()
    {
        return 'multilang-slug';
    }
}
