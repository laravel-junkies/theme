<?php

/*
 * This file is part of Laravel Junkies Theme.
 *
 * (c) Tobias Maxham <git2017@maxham.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace LaraJunkie\Theme\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class LaraThemeFacade
 * @package LaraJunkie\Theme\Facades
 * @author Tobias Maxham <git2017@maxham.de>
 */
class LaraThemeFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'lj.theme';
    }
}
