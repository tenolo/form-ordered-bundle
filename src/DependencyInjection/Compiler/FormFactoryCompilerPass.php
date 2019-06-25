<?php

namespace Tenolo\Bundle\FormOrderedBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;
use Tenolo\FormOrdered\OrderedResolvedFormTypeFactory;
use Tenolo\FormOrdered\Orderer\FormOrderer;
use Symfony\Component\Form\ResolvedFormTypeFactoryInterface;

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
        $definition = $container->findDefinition(ResolvedFormTypeFactoryInterface::class);
        $definition->setClass(OrderedResolvedFormTypeFactory::class);
        $definition->setArgument(0, new Reference(FormOrderer::class));
        $definition->setAutoconfigured(true);
        $definition->setAutowired(true);
    }

}
