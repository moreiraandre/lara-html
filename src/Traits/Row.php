<?php

namespace MoreiraAndre\LaraHtml\Traits;

use MoreiraAndre\LaraHtml\Grid\RowFinal;

trait Row
{
    private $row;

    /**
     * @return RowFinal
     */
    public function getRow(): ?RowFinal
    {
        return $this->row;
    }

    /**
     * @param RowFinal|null $row
     * @return $this
     */
    public function setRow(?RowFinal $row): self
    {
        $this->row = $row;
        return $this;
    }
}
