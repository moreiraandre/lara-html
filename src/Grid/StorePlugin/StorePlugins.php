<?php

namespace MoreiraAndre\LaraHtml\Grid\StorePlugin;

use MoreiraAndre\LaraHtml\PluginAbstract;

final class StorePlugins
{
    public function run(PluginAbstract $container, PluginAbstract $plugin)
    {
        $container->storePlugin($plugin);
    }
}
