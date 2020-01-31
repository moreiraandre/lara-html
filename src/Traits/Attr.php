<?php

namespace MoreiraAndre\LaraHtml\Traits;

trait Attr
{
    private $attr = [];

    public function attr(string $name, string $value = null)
    {
        if (is_null($value))
            return $this->hasAttr($name)
                ? $this->attr[$name]
                : null;

        $this->attr[$name] = $value;
        return $this;
    }

    public function newAttr(string $name, string $value = null)
    {
        if (is_null($value))
            return $this->hasAttr($name)
                ? $this->attr[$name]
                : null;

        if (isset($this->attr[$name]))
            $this->attr[$name] .= " $value";
        else
            $this->attr[$name] = $value;
        $this->attr[$name] = trim($this->attr[$name]);
        return $this;
    }

    public function rmAttr(string $attr): self
    {
        if ($this->hasAttr($attr))
            unset($this->attr[$attr]);

        return $this;
    }

    public function hasAttr(string $name): bool
    {
        return isset($this->attr[$name]);
    }

    public function getAttr(): array
    {
        return $this->attr;
    }

    public function getAttrTag(): string
    {
        $attr = '';
        foreach ($this->getAttr() as $item => $value)
            $attr .= " {$item}=\"{$value}\"";

        return trim($attr);
    }
}
