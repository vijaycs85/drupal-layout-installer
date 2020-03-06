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
    // Get name of the package. i.e. 'drupal-layout-fourcol'
    // from 'vijaycs85/drupal-layout-fourcol'.
    $package_name = explode('/', $package->getName());
    $name = array_pop($package_name);

    // Get 'drupal-layout-' prefix.
    $prefix = substr($name, 0, 14);
    if ('drupal-layout-' !== $prefix) {
      throw new \InvalidArgumentException(
        'Unable to install layout, Drupal layouts '
        .'should always start their package name with '
        .'"drupal-layout-"'
      );
    }

    // Remove 'drupal-layout-' prefix.
    return 'layouts/'.substr($name, 14);
  }

  /**
   * {@inheritDoc}
   */
  public function supports($packageType)
  {
    return 'drupal-layout' === $packageType;
  }
}
