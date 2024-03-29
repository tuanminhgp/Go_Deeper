<?php


namespace AppBundle\DependencyInjection\Compiler;

 use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
 use Symfony\Component\DependencyInjection\ContainerBuilder;

 class EarlyLoggingMessagePass implements CompilerPassInterface
{
     public function process(ContainerBuilder $container)
     {
         $definition = $container->findDefinition('logger');
         $definition->addMethodCall('debug', array('logger CREATED'));
     }


 }