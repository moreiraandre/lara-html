<?php

namespace MoreiraAndre\LaraHtml\Examples;

use MoreiraAndre\LaraHtml\Grid\ScreenFinal;
use MoreiraAndre\LaraHtml\CustomScreenAbstract;

class Dropdown extends CustomScreenAbstract
{
    private function addOptions($dropdown)
    {
        $dropdown->addDropItem('Option1');
        $dropdown->addDropItem('Option2');
        $dropdown->addDropItem('Option3');
    }

    public function run(ScreenFinal $screen)
    {
        $dropdownPrimary = $screen->addDropdownPrimary('Primary');
        $this->addOptions($dropdownPrimary);

        $dropdownSecondary = $screen->addDropdownSecondary('Secondary');
        $this->addOptions($dropdownSecondary);

        $dropdownSuccess = $screen->addDropdownSuccess('Success');
        $this->addOptions($dropdownSuccess);

        $dropdownDanger = $screen->addDropdownDanger('Danger');
        $this->addOptions($dropdownDanger);

        $dropdownWarning = $screen->addDropdownWarning('Warning');
        $this->addOptions($dropdownWarning);

        $dropdownInfo = $screen->addDropdownInfo('Info');
        $this->addOptions($dropdownInfo);

        $dropdownLight = $screen->addDropdownLight('Light');
        $this->addOptions($dropdownLight);

        $dropdownDark = $screen->addDropdownDark('Dark');
        $this->addOptions($dropdownDark);
    }
}
