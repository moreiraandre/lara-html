<?php

namespace MoreiraAndre\LaraHtml\Grid;

use MoreiraAndre\LaraHtml\PluginAbstract;

final class RowFinal extends PluginAbstract
{
    protected $namePlugin = 'Row';
    protected $nameBlade = 'Row';
    protected $containerType = 'Col';

    public function __construct()
    {
        $this->attr('class', $this->getConfig('grid-css.row'));
    }
}
