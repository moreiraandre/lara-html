<?php

namespace MoreiraAndre\LaraHtml\Grid\StorePlugin;

use MoreiraAndre\LaraHtml\PluginAbstract;

final class StoreOnePlugin
{
    public function run(PluginAbstract $container, PluginAbstract $plugin)
    {
        if ($container->pluginsIsEmpty())
            $container->storePlugin($plugin);
        else {
            $newRow = $container->internalRow();
            $newRow
                ->col()
                ->storePlugin($plugin);
        }
    }
}
