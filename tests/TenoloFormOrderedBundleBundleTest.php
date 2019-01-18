<?php

/*
 * This file is part of the Ivory Ordered Form bundle package.
 *
 * (c) Eric GELOEN <geloen.eric@gmail.com>
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code.
 */

namespace Tenolo\Bundle\FormOrderedBundle\Tests;

use Tenolo\Bundle\FormOrderedBundle\TenoloFormOrderedBundle;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * @author GeLo <geloen.eric@gmail.com>
 */
class TenoloFormOrdererdBundleBundleTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var TenoloFormOrderedBundle
     */
    protected $bundle;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        $this->bundle = new TenoloFormOrderedBundle();
    }

    public function testInheritance()
    {
        $this->assertInstanceOf(Bundle::class, $this->bundle);
    }
}
