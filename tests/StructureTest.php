<?php

namespace MoreiraAndre\LaraHtml\Tests;

use Illuminate\Foundation\Application;
use MoreiraAndre\LaraHtml\Grid\PluginFinal;
use MoreiraAndre\LaraHtml\Grid\ScreenFinal;

use MoreiraAndre\LaraHtml\LaraHtmlProvider;
use PHPUnit\Framework\TestCase;

class StructureTest extends TestCase
{
    public function testAddPlugin()
    {
        $app = new Application(
            realpath(__DIR__.'/../../')
        );

        $app->register(LaraHtmlProvider::class);
        $screen = resolve(ScreenFinal::class);

        $plugin = $screen->addText('name');
        $this->assertTrue($plugin instanceof PluginFinal);
    }
}
