<?php

namespace MoreiraAndre\LaraHtml\Grid;

use MoreiraAndre\LaraHtml\PluginAbstract;

final class ScreenFinal extends PluginAbstract
{
    protected $namePlugin = 'Screen';
    protected $nameBlade = 'Screen';
    protected $containerType = 'Row';
    private $template;
    private $extendedBlade;

    public function __construct()
    {
        $this->attr('class', $this->getConfig('grid-css.screen'));
    }

    /**
     * @return string
     */
    public function getTemplate(): ?string
    {
        return $this->template;
    }

    /**
     * @param string $template
     * @return $this
     */
    public function setTemplate(string $template): self
    {
        $this->template = $template;
        return $this;
    }

    /**
     * @return string
     */
    public function getExtendedBlade(): ?string
    {
        return $this->extendedBlade;
    }

    /**
     * @param string $extendedBlade
     * @return $this
     */
    public function setExtendedBlade(string $extendedBlade): self
    {
        $this->extendedBlade = $extendedBlade;
        return $this;
    }
}
