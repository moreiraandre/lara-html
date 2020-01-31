<?php

namespace MoreiraAndre\LaraHtml\Traits;

use MoreiraAndre\LaraHtml\Grid\ColFinal;

trait Col
{
    private $col;

    /**
     * @return ColFinal|null
     */
    public function getCol(): ?ColFinal
    {
        return $this->col;
    }

    /**
     * @param ColFinal|null $col
     * @return $this
     */
    public function setCol(?ColFinal $col): self
    {
        $this->col = $col;
        return $this;
    }
}
