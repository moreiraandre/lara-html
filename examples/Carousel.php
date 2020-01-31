<?php

namespace MoreiraAndre\LaraHtml\Examples;

use MoreiraAndre\LaraHtml\Grid\ScreenFinal;
use MoreiraAndre\LaraHtml\CustomScreenAbstract;

class Carousel extends CustomScreenAbstract
{
    public function run(ScreenFinal $screen)
    {
        $carousel = $screen->addCarousel();
        $carousel->attrStyle('width: 700px;');
        $carousel->attrStyle('height: 500px;');
        $carousel->addCarouselItem('https://st3.depositphotos.com/12985656/18421/i/1600/depositphotos_184217168-stock-photo-side-view-cute-chameleon-succulents.jpg');
        $carousel->addCarouselItem('https://st.depositphotos.com/1003660/1320/i/950/depositphotos_13208945-stock-photo-black-friesian-horse-gallop.jpg');
    }
}
