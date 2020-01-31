<?php

namespace MoreiraAndre\LaraHtml\Traits;

trait Meta
{
    private $meta = [];

    public function meta(string $name, string $value = null)
    {
        if (is_null($value))
            return $this->hasMeta($name)
                ? $this->meta[$name]
                : null;

        $this->meta[$name] = $value;
        return $this;
    }

    public function newMeta(string $name, string $value = null)
    {
        if (is_null($value))
            return $this->hasMeta($name)
                ? $this->meta[$name]
                : null;

        $this->meta[$name] .= " $value";
        $this->meta[$name] = trim($this->meta[$name]);
        return $this;
    }

    public function rmMeta(string $name): self
    {
        if ($this->hasMeta($name))
            unset($this->meta[$name]);

        return $this;
    }

    public function hasMeta(string $name): bool
    {
        return isset($this->meta[$name]);
    }

    public function getMeta(): array
    {
        return $this->meta;
    }
}
