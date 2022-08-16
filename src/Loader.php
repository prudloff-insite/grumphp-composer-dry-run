<?php

namespace ComposerDryRun;

use GrumPHP\Extension\ExtensionInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

class Loader implements ExtensionInterface {

  /**
   * @param ContainerBuilder $container
   */
  public function load(ContainerBuilder $container): void {
    $container->register('task.composer_dry_run', ComposerDryRun::class)
      ->addArgument(new Reference('process_builder'))
      ->addArgument(new Reference('formatter.raw_process'))
      ->addTag('grumphp.task', ['task' => 'composer_dry_run']);
  }
}
