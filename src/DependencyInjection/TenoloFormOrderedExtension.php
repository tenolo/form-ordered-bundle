<?php
/*
 * This file is part of the Ivory Ordered Form bundle package.
 *
 * (c) Eric GELOEN <geloen.eric@gmail.com>
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code.
 */

namespace Tenolo\Bundle\FormOrderedBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Tenolo\FormOrdered\OrderedResolvedFormTypeFactory;

/**
 * @author GeLo <geloen.eric@gmail.com>
 */
class TenoloFormOrderedExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yml');

        if (!method_exists(AbstractType::class, 'getBlockPrefix')) {

            $container->getDefinition('tenolo_form_ordered.form_extension')
                ->clearTag($tag = 'form.type_extension')
                ->addTag($tag, ['alias' => 'form']);

            $container->getDefinition('tenolo_form_ordered.button_extension')
                ->clearTag($tag)
                ->addTag($tag, ['alias' => 'button']);
        }
    }
}
