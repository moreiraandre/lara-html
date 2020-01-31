<?php

namespace MoreiraAndre\LaraHtml\Bootstrap4Fa\Mutators;

use MoreiraAndre\LaraHtml\EventInterface;
use MoreiraAndre\LaraHtml\PluginAbstract;

class CarouselBefore implements EventInterface
{
    /**
     * Adicionando classe "active" ao primeiro plugin do carousel
     *
     * @param PluginAbstract $plugin
     */
    public function run(PluginAbstract $plugin)
    {
        $firstPlugin = $plugin->getPlugins()[0] ?? null;
        if ($firstPlugin instanceof PluginAbstract)
            $firstPlugin->attrClass('active');
    }
}
