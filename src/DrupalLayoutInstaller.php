<?php

namespace Vijaycs85\Composer;

use Composer\Installer\LibraryInstaller;

class DrupalLayoutInstaller extends LibraryInstaller
{

  /**
   * {@inheritDoc}
   */
  public function supports($packageType)
  {
    return 'drupal-layout' === $packageType;
  }
}
