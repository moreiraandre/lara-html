<?php

namespace MoreiraAndre\LaraHtml\Examples;

use MoreiraAndre\LaraHtml\Grid\ScreenFinal;
use MoreiraAndre\LaraHtml\CustomScreenAbstract;

class Card extends CustomScreenAbstract
{
    private function defaultStructure($card)
    {
        $card->attrStyle('width: 18rem;');
        $card->addCardHeader('My card');
        $card->addCardImgTop('https://sig.unemat.br/storage/sistema/logo_ecosistema.svg');
        $cardBody = $card->addCardBody();
        $cardBody->addCardBodyTitle('Título');
        $cardBody->addCardBodyText('Texto');
        $card->addCardFooter('Footer');
    }

    public function run(ScreenFinal $screen)
    {
        $card = $screen->addCard();
        $this->defaultStructure($card);

        $cardPrimary = $screen->addCardPrimary();
        $this->defaultStructure($cardPrimary);

        $cardSecondary = $screen->addCardSecondary();
        $this->defaultStructure($cardSecondary);

        $cardSuccess = $screen->addCardSuccess();
        $this->defaultStructure($cardSuccess);

        $cardDanger = $screen->addCardDanger();
        $this->defaultStructure($cardDanger);

        $cardWarning = $screen->addCardWarning();
        $this->defaultStructure($cardWarning);

        $cardInfo = $screen->addCardInfo();
        $this->defaultStructure($cardInfo);

        $cardLight = $screen->addCardLight();
        $this->defaultStructure($cardLight);

        $cardDark = $screen->addCardDark();
        $this->defaultStructure($cardDark);
    }
}
