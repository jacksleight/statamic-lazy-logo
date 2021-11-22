<?php

namespace JackSleight\StatamicLazyLogo\Updates;

use Statamic\UpdateScripts\UpdateScript;

class UpdateConfigFilename extends UpdateScript
{
    public function shouldUpdate($newVersion, $oldVersion)
    {
        return $this->isUpdatingTo('0.3.2');
    }

    public function update()
    {
        $oldFilename = config_path('statamic/lazy-logo.php');
        $newFilename = config_path('statamic/lazy_logo.php');
        if (file_exists($oldFilename)) {
            rename($oldFilename, $newFilename);
        }
    }
}
