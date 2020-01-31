<?php

namespace MoreiraAndre\LaraHtml\Examples;

use MoreiraAndre\LaraHtml\Grid\ScreenFinal;
use MoreiraAndre\LaraHtml\CustomScreenAbstract;

class Form extends CustomScreenAbstract
{
    private $data;

    public function __construct($data = null)
    {
        $this->data = $data;
    }

    public function run(ScreenFinal $screen)
    {
        $form = $screen->addForm();
        $form->addText('first_name')->attrAutofocus('autofocus');
        $form->addText('last_name');

        $form->setData($this->data);

        $form->row();
        $form->addText('postal_code');
        $form->addText('address');

        $form->row();
        $colTelephone1 = $form->addText('telephone1')->getCol();
        $colTelephone1->row();
        $colTelephone1->addText('telephone2');
        $colTelephone1->row();
        $colTelephone1->addText('telephone3');
        $colEmail1 = $form->addText('email1')->getCol();
        $colEmail1->addText('email2');
        $colEmail1->addText('email3');
        $colEmail1->row();
        $colEmail1->addText('website');
        $colEmail1->row();
        $colEmail1->addText('cpf');
        $colEmail1->addText('rg');

        $form->row();
        $form->addButton('Send');
    }
}
