<?php

namespace Composer\Installers;

class LithiumInstaller extends \Composer\Installers\BaseInstaller
{
    protected $locations = array('library' => 'libraries/{$name}/', 'source' => 'libraries/_source/{$name}/');
}
