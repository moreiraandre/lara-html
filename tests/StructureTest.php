<?php

namespace MoreiraAndre\LaraHtml\Tests;

use MoreiraAndre\LaraHtml\Grid\PluginFinal;
use MoreiraAndre\LaraHtml\Grid\RowFinal;
use MoreiraAndre\LaraHtml\Grid\ScreenFinal;

use Orchestra\Testbench\TestCase;

class StructureTest extends TestCase
{
    private $screen;

    protected function setUp(): void
    {
        parent::setUp();

        $this->screen = new ScreenFinal; // CRIANDO NOVA TELA
        $this->screen->setScreen($this->screen); // ADICIONANDO AUTO-REFERÊNCIA PARA OS PLUGINS FILHOS

        $this->screen->setTemplate(config('larahtml.config.default'));
        $this->screen->setExtendedBlade(config('larahtml.config.extend_blade'));
    }

    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('larahtml.config', require __DIR__.'/../src/Config/config.php');
        $app['config']->set('larahtml.bootstrap4-fa', require __DIR__.'/../src/Config/bootstrap4-fa.php');
    }

    public function testAddPlugin()
    {
        $plugin = $this->screen->addText('name');
        $this->assertTrue($plugin instanceof PluginFinal);
    }

    public function testDefiningAttributes()
    {
        $plugin = $this->screen->addText('name');

        $plugin->attrClass('input-mask');
        $this->assertTrue(strpos($plugin->attr('class'), 'input-mask') > 0); // concatenated value

        $plugin->attrClass = 'input-mask';
        $this->assertTrue(strpos($plugin->attr('class'), 'input-mask') === 0); // substituted value
    }

    public function testContainerAddPlugins()
    {
        $form = $this->screen->addForm('/post');
        $textInput = $form->addText('name');
        $this->assertTrue($textInput instanceof PluginFinal);
    }

    public function testAddRow()
    {
        $row = $this->screen->row();
        $this->assertTrue($row instanceof RowFinal);
    }

    public function testAssigningBulkData()
    {
        $form = $this->screen->addForm('/post');

        $textName = $form->addText('name');
        $textPhone = $form->addText('phone');

        $form->setData([
            'name' => 'NAME OF TEST',
            'phone' => '9999-1111',
        ]);

        $this->assertEquals($textName->attr('value'), 'NAME OF TEST');
        $this->assertEquals($textPhone->attr('value'), '9999-1111');
    }
}
