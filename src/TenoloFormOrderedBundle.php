<?php

namespace Tenolo\Bundle\FormOrderedBundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use Tenolo\Bundle\FormOrderedBundle\DependencyInjection\Compiler\FormFactoryCompilerPass;

/**
 * Class TenoloFormOrderedBundle
 *
 * @package Tenolo\Bundle\FormOrderedBundle
 * @author  GeLo <geloen.eric@gmail.com>
 * @author  Nikita Loges
 * @company tenolo GbR
 */
class TenoloFormOrderedBundle extends Bundle
{
    /**
     * @inheritDoc
     */
    public function build(ContainerBuilder $container)
    {
        $container->addCompilerPass(new FormFactoryCompilerPass());
    }
}
