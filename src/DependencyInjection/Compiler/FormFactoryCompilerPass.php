<?php

namespace Tenolo\Bundle\FormOrderedBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;
use Tenolo\FormOrdered\OrderedResolvedFormTypeFactory;
use Tenolo\FormOrdered\Orderer\FormOrderer;

/**
 * Class FormFactoryCompilerPass
 *
 * @package Tenolo\Bundle\FormOrderedBundle\DependencyInjection\Compiler
 * @author  Nikita Loges
 * @company tenolo GbR
 */
class FormFactoryCompilerPass implements CompilerPassInterface
{
    /**
     * @inheritDoc
     */
    public function process(ContainerBuilder $container)
    {
        $container
            ->findDefinition('form.resolved_type_factory')
            ->setClass(OrderedResolvedFormTypeFactory::class)
            ->setArgument(0, new Reference(FormOrderer::class))
            ->setAutoconfigured(true)
            ->setAutowired(true);
    }

}
