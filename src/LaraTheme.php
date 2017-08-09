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
use Illuminate\View\ViewFinderInterface;

/**
 * Class LaraTheme
 * @package LaraJunkie\Theme
 * @author Tobias Maxham <git2017@maxham.de>
 */
class LaraTheme
{
    /**
     * @var string $theme
     */
    private $theme;

    /**
     * @var ViewFinderInterface $viewFinder
     */
    private $viewFinder;

    /**
     * @param Container $appContainer
     * @param ViewFinderInterface $viewFinder
     */
    public function __construct(Container $appContainer, $viewFinder)
    {
        $this->viewFinder = $viewFinder;
    }

    /**
     * @param string $theme
     */
    public function setup($theme = null)
    {
        if (null == $theme) {
            $theme = $this->getDefaultTheme();
        }
        $this->theme = $theme;

        $path = base_path('resources/themes') . '/' . $theme;
        // we just have to add a new location to the Laravel ViewFinder
        // more we don't need to do...
        $this->viewFinder->addLocation($path . '/views');
    }

    /**
     * @return string
     */
    public function getDefaultTheme()
    {
        return 'default';
    }
}
