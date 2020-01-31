<?php

namespace MoreiraAndre\LaraHtml\Grid\StorePlugin;

use MoreiraAndre\LaraHtml\PluginAbstract;

final class StoreRow
{
    public function run(PluginAbstract $container, PluginAbstract $plugin)
    {
        if ($container->pluginsIsEmpty())
            $container->row();

        $container
            ->col()
            ->storePlugin($plugin);
    }
}
