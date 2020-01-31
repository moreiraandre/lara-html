<?php

namespace MoreiraAndre\LaraHtml\Examples;

use MoreiraAndre\LaraHtml\Grid\ScreenFinal;
use MoreiraAndre\LaraHtml\CustomScreenAbstract;

class ListExample extends CustomScreenAbstract
{
    public function run(ScreenFinal $screen)
    {
        $list = $screen->addList();
        $list->addListItemActive('Active item');
        $list->addListItem('Item 1');
        $list->addListItem('Item 2');
        $list->addListItemDisabled('Item disabled');
        $list->addListItem('Item 3');

        $list2 = $screen->addList();
        $list2->addListItem('Item 1');
        $list2->addListItemDisabled('Item disabled');
        $list2->addListItem('Item 2');
        $list2->addListItem('Item 3');
        $list2->addListItemActive('Active item');
    }
}
