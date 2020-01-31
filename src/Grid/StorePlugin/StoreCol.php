<?php

namespace MoreiraAndre\LaraHtml\Grid\StorePlugin;

use MoreiraAndre\LaraHtml\PluginAbstract;

final class StoreCol
{
    public function run(PluginAbstract $container, PluginAbstract $plugin)
    {
        $container
            ->col()
            ->storePlugin($plugin);
    }
}
