<?php

/*
 * This file is part of Laravel Junkies Theme.
 *
 * (c) Tobias Maxham <git2017@maxham.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace LaraJunkie\Theme;

use Illuminate\Contracts\Container\Container;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\Factory;

/**
 * Class ThemeServiceprovider
 * @package LaraJunkie\Theme
 * @author Tobias Maxham <git2017@maxham.de>
 */
class ThemeServiceprovider extends ServiceProvider
{

    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        // ...
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerTheme();
    }

    /**
     * Register the theme handler class.
     *
     * @return void
     */
    private function registerTheme()
    {
        $this->app->singleton('lj.theme', function (Container $app) {
            /** @var Factory $view */
            $view = $app['view'];
            $viewFinder = $view->getFinder();

            return new LaraTheme($app, $viewFinder);
        });

        $this->app->alias('lj.theme', LaraTheme::class);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return string[]
     */
    public function provides()
    {
        return [
            'lj.theme',
        ];
    }
}
