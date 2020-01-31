<?php

namespace MoreiraAndre\LaraHtml\Examples;

use MoreiraAndre\LaraHtml\Grid\ScreenFinal;
use MoreiraAndre\LaraHtml\CustomScreenAbstract;

class Alerts extends CustomScreenAbstract
{
    public function run(ScreenFinal $screen)
    {
        $screen->addAlertPrimary('Primary');
        $screen->row();
        $screen->addAlertSecondary('Secondary');
        $screen->row();
        $screen->addAlertSuccess('Success');
        $screen->row();
        $screen->addAlertDanger('Danger');
        $screen->row();
        $screen->addAlertWarning('Warning');
        $screen->row();
        $screen->addAlertInfo('Info');
        $screen->row();
        $screen->addAlertLight('Light');
        $screen->row();
        $screen->addAlertDark('Dark');
        $screen->row();

    }
}
