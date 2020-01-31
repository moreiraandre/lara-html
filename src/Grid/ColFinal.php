<?php

namespace MoreiraAndre\LaraHtml\Grid;

use MoreiraAndre\LaraHtml\PluginAbstract;

final class ColFinal extends PluginAbstract
{
    protected $namePlugin = 'Col';
    protected $nameBlade = 'Col';
    protected $containerType = 'OnePlugin';
    private $size = [];

    public function __construct()
    {
        $this->attr('class', $this->getConfig('grid-css.col'));
    }

    public function getSize(int $screenSize): ?int
    {
        if ($this->hasScreenSize($screenSize))
            return $this->size[$screenSize];
        return null;
    }

    public function setSize(int $screenSize, int $columnSize): self
    {
        $this->size[$screenSize] = $columnSize;
        return $this;
    }

    public function hasScreenSize(int $screenSize): bool
    {
        return isset($this->size[$screenSize]);
    }
}
