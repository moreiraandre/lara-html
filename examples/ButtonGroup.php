<?php

namespace MoreiraAndre\LaraHtml\Examples;

use MoreiraAndre\LaraHtml\Grid\ScreenFinal;
use MoreiraAndre\LaraHtml\CustomScreenAbstract;

class ButtonGroup extends CustomScreenAbstract
{
    public function run(ScreenFinal $screen)
    {
        $btnGroup = $screen->addBtnGroup();
        $btnGroup->addBtnPrimary('Primary');
        $btnGroup->addBtnSecondary('Secondary');
        $btnGroup->addBtnSuccess('Success');
        $btnGroup->addBtnDanger('Danger');
        $btnGroup->addBtnWarning('Warning');
        $btnGroup->addBtnInfo('Info');
        $btnGroup->addBtnLight('Light');
        $btnGroup->addBtnDark('Dark');
        $btnGroup->addBtnLink('Link');

        $screen->row()->addBr();
        $screen->row();

        $buttonGroupVertical = $screen->addBtnGroupVertical();
        $buttonGroupVertical->addBtnPrimary('Primary');
        $buttonGroupVertical->addBtnSecondary('Secondary');
        $buttonGroupVertical->addBtnSuccess('Success');
        $buttonGroupVertical->addBtnDanger('Danger');
        $buttonGroupVertical->addBtnWarning('Warning');
        $buttonGroupVertical->addBtnInfo('Info');
        $buttonGroupVertical->addBtnLight('Light');
        $buttonGroupVertical->addBtnDark('Dark');
        $buttonGroupVertical->addBtnLink('Link');
    }
}
