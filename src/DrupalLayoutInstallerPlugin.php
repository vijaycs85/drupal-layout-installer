<?php

namespace Vijaycs85\Composer;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

class DrupalLayoutInstallerPlugin implements PluginInterface
{
  public function activate(Composer $composer, IOInterface $io)
  {
    $installer = new DrupalLayoutInstaller($io, $composer);
    $composer->getInstallationManager()->addInstaller($installer);
  }
}