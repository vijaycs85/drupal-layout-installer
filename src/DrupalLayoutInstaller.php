<?php

namespace Vijaycs85\Composer;

use Composer\Installer\LibraryInstaller;
use Composer\Package\PackageInterface;

class DrupalLayoutInstaller extends LibraryInstaller
{
  /**
   * {@inheritDoc}
   */
  public function getInstallPath(PackageInterface $package)
  {
    return 'layouts/';
  }

  /**
   * {@inheritDoc}
   */
  public function supports($packageType)
  {
    return 'drupal-layout' === $packageType;
  }
}
