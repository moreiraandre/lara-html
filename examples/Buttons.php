<?php

namespace MoreiraAndre\LaraHtml\Examples;

use MoreiraAndre\LaraHtml\Grid\ScreenFinal;
use MoreiraAndre\LaraHtml\CustomScreenAbstract;

class Buttons extends CustomScreenAbstract
{
    public function run(ScreenFinal $screen)
    {
        $screen->addBtnPrimary('Primary');
        $screen->addBtnSecondary('Secondary');
        $screen->addBtnSuccess('Success');
        $screen->addBtnDanger('Danger');
        $screen->addBtnWarning('Warning');
        $screen->addBtnInfo('Info');
        $screen->addBtnLight('Light');
        $screen->addBtnDark('Dark');
        $screen->addBtnLink('Link');
    }
}
