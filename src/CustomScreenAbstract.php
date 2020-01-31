<?php

namespace MoreiraAndre\LaraHtml;

use MoreiraAndre\LaraHtml\Grid\ScreenFinal;

abstract class CustomScreenAbstract
{
    public $template;
    public $extendedBlade;

    private $screenFinal;

    /**
     * @return ScreenFinal
     */
    public function getScreenFinal()
    {
        return $this->screenFinal;
    }

    /**
     * @param ScreenFinal $screenFinal
     * @return $this
     */
    public function setScreenFinal(ScreenFinal $screenFinal)
    {
        $this->screenFinal = $screenFinal;
        return $this;
    }
}
