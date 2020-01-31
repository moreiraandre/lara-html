<?php

namespace MoreiraAndre\LaraHtml\Examples;

use MoreiraAndre\LaraHtml\Grid\ScreenFinal;
use MoreiraAndre\LaraHtml\CustomScreenAbstract;

class Breadcrumb extends CustomScreenAbstract
{
    public function run(ScreenFinal $screen)
    {
        $breadcrumb = $screen->addBreadcrumb();
        $breadcrumb->addBreadItem('Home');
        $breadcrumb->addBreadItem('Library');
        $breadcrumb->addBreadItemActive('Data');
    }
}
