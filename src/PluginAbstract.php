<?php

namespace MoreiraAndre\LaraHtml;

use MoreiraAndre\LaraHtml\Traits\{Attr, Col, Container, Meta, Row, StoreData, Config};
use MoreiraAndre\LaraHtml\Grid\{PluginFinal, ScreenFinal};

use Illuminate\Support\Str;

abstract class PluginAbstract
{
    use Attr, Col, Container, Meta, Row, StoreData, Config;

    protected $namePlugin;
    protected $nameBlade;
    private $screen;

    /**
     * @return string
     */
    public function getNamePlugin(): string
    {
        return $this->namePlugin;
    }

    /**
     * @param string $namePlugin
     * @return PluginAbstract
     */
    public function setNamePlugin(string $namePlugin): self
    {
        $this->namePlugin = $namePlugin;
        return $this;
    }

    /**
     * @return string
     */
    public function getNameBlade(): string
    {
        return $this->nameBlade;
    }

    /**
     * @param string $nameBlade
     * @return PluginAbstract
     */
    public function setNameBlade(string $nameBlade): self
    {
        $this->nameBlade = $nameBlade;
        return $this;
    }

    /**
     * @return ScreenFinal
     */
    public function getScreen(): ScreenFinal
    {
        return $this->screen;
    }

    /**
     * @param ScreenFinal $screen
     * @return $this
     */
    public function setScreen(ScreenFinal $screen): self
    {
        $this->screen = $screen;
        return $this;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getHtml()
    {
        $data = [
            'attrTag' => $this->getAttrTag(),
            'htmlPlugins' => $this->getHtmlPlugins(),
            'attr' => $this->getAttr(),
            'meta' => $this->getMeta(),
        ];

        if ($this instanceof ScreenFinal)
            $data['extendedBlade'] = $this->getExtendedBlade();

        return view("larahtml::{$this->getScreen()->getTemplate()}.{$this->getNameBlade()}", $data);
    }

    public function getConfig(string $key)
    {
        return config('larahtml.' . config('larahtml.config.default') . '.' . $key);
    }

    public function __call($name, $arguments)
    {
        if (strpos($name, 'meta') === 0) {
            $name = Str::kebab(str_replace('meta', '', $name));
            return $this->newMeta($name, $arguments[0]);
        } elseif (strpos($name, 'attr') === 0) {
            $name = Str::kebab(str_replace('attr', '', $name));
            return $this->newAttr($name, $arguments[0]);
        } elseif (strpos($name, 'add') === 0) {
            if (is_array(current($arguments))) { // CRIANDO MULTIPLOS PLUGINS ATRAVÉS DE UM VETOR
                foreach (current($arguments) as $idx => $item)
                    $this->{$name}(...$item);
            } else {
                $name = Str::studly(str_replace('add', '', $name));
                $plugin = new PluginFinal;
                $plugin->setNamePlugin($name);
                $plugin->setNameBlade($name);
                $plugin->setScreen($this->screen);
                $this->setConfig($plugin, $arguments);
                return $this->newPlugin($plugin);
            }
        }
    }

    public function __set($name, $value)
    {
        if (strpos($name, 'meta') === 0) {
            $name = Str::kebab(str_replace('meta', '', $name));
            return $this->meta($name, $value);
        } elseif (strpos($name, 'attr') === 0) {
            $name = Str::kebab(str_replace('attr', '', $name));
            return $this->attr($name, $value);
        }
    }
}
