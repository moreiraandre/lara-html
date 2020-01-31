<?php

namespace MoreiraAndre\LaraHtml\Traits;

use MoreiraAndre\LaraHtml\Grid\PluginFinal;

trait StoreData
{
    private $storeData = [];
    private $attrFind = 'name';
    private $attrValue = 'value';

    public function setData(array $data): self
    {
        foreach ($data as $attr => $value) {
            foreach ($this->getPlugins() as $plugin) {
                if (!($plugin instanceof PluginFinal))
                    $plugin->setData($data);
                else
                    if ($plugin->attr($this->getDataAttrFind()) == $attr) // SE O ATRIBUTO EXISTIR NO PLUGIN
                        // DEFINA O VALOR PRIORIZANDO A REQUISIÇÃO ANTERIOR E DEFINIÇÃO DO DEV
                        $plugin->attr($this->attrValue,
                            old($attr, $plugin->attr($this->getDataAttrValue()) ?: $value));
            }
        }
        $this->storeData = $data;

        return $this;
    }

    public function rmData(string $key): self
    {
        foreach ($this->storeData as $attr => $value)
            foreach ($this->getPlugins() as $plugin)
                $plugin->rmAttr($this->attrValue, $value);
        $this->storeData = [];

        return $this;
    }

    public function setDataAttrFind(string $key): self
    {
        $this->attrFind = $key;
        return $this;
    }

    public function getDataAttrFind(): string
    {
        return $this->attrFind;
    }

    public function setDataAttrValue(string $key): self
    {
        $this->attrValue = $key;
        return $this;
    }

    public function getDataAttrValue(): string
    {
        return $this->attrValue;
    }

}
