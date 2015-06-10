<?php

/*
 * This file is part of Laravel Swap.
 *
 * (c) Florian Voutzinos <florian@voutzinos.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Florianv\LaravelSwap\Tests;

use GrahamCampbell\TestBench\AbstractPackageTestCase;

abstract class AbstractTestCase extends AbstractPackageTestCase
{
    /**
     * {@inheritdoc}
     */
    protected function getServiceProviderClass($app)
    {
        return 'Florianv\LaravelSwap\SwapServiceProvider';
    }
}