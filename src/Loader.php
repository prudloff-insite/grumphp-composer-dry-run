<?php

namespace ComposerDryRun;

use GrumPHP\Extension\ExtensionInterface;

class Loader implements ExtensionInterface {

  /**
   * @return iterable
   */
  public function imports(): iterable {
    return [
      __DIR__ . '/../composer_dry_run.yml',
    ];
  }
}
