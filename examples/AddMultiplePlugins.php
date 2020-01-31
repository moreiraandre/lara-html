<?php

namespace MoreiraAndre\LaraHtml\Examples;

use MoreiraAndre\LaraHtml\Grid\ScreenFinal;
use MoreiraAndre\LaraHtml\CustomScreenAbstract;

class AddMultiplePlugins extends CustomScreenAbstract
{
    private $data;

    public function __construct($data = null)
    {
        $this->data = $data;
    }

    private function fakeData()
    {
        $linhas = [];
        $data = [
            [1],
            ['André Moreira'],
        ];
        for ($x=0; $x<10;$x++)
            $linhas[] = $data;

        return $linhas;
    }

    public function run(ScreenFinal $screen)
    {
        $table = $screen->addTable();

        $headRow = $table->addTr();
        $headRow->addTh('#');
        $headRow->addTh('Nome');

        $linhas = $this->fakeData();

        foreach ($linhas as $data) {
            $bodyRow = $table->addTr();
            $bodyRow->addTd($data);
        }
    }
}
