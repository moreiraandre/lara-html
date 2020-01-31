<?php

namespace MoreiraAndre\LaraHtml\Examples;

use MoreiraAndre\LaraHtml\Grid\ScreenFinal;
use MoreiraAndre\LaraHtml\CustomScreenAbstract;

class Badges extends CustomScreenAbstract
{
    public function run(ScreenFinal $screen)
    {
        $screen->addBadgePrimary('Primary');
        $screen->addBadgeSecondary('Secondary');
        $screen->addBadgeSuccess('Success');
        $screen->addBadgeDanger('Danger');
        $screen->addBadgeWarning('Warning');
        $screen->addBadgeInfo('Info');
        $screen->addBadgeLight('Light');
        $screen->addBadgeDark('Dark');

    }
}
