<?php

namespace MoreiraAndre\LaraHtml\Traits;

use MoreiraAndre\LaraHtml\EventInterface;
use MoreiraAndre\LaraHtml\PluginAbstract;
use MoreiraAndre\LaraHtml\Grid\ColFinal;
use MoreiraAndre\LaraHtml\Grid\RowFinal;
use MoreiraAndre\LaraHtml\Grid\StorePlugin\{StoreCol, StoreOnePlugin, StorePlugins, StoreRow};

trait Container
{
    private $plugins = [];
    protected $containerType;

    /**
     * @return string|null
     */
    public function getContainerType(): ?string
    {
        return $this->containerType;
    }

    /**
     * @param string $containerType
     * @return $this
     * @throws \Exception
     */
    public function setContainerType(string $containerType): self
    {
        if (!in_array($containerType, ['Row', 'Col', 'OnePlugin', 'Plugins']))
            throw new \Exception("'{$containerType}' container type is invalid!");

        $this->containerType = $containerType;

        return $this;
    }

    public function newPlugin(PluginAbstract $plugin): PluginAbstract
    {
        if ($this->containerType === 'Row')
            (new StoreRow)->run($this, $plugin);
        elseif ($this->containerType === 'Col')
            (new StoreCol)->run($this, $plugin);
        elseif ($this->containerType === 'OnePlugin')
            (new StoreOnePlugin)->run($this, $plugin);
        elseif ($this->containerType === 'Plugins')
            (new StorePlugins)->run($this, $plugin);
        else
            throw new \Exception("Invalid container type '{$this->getContainerType()}'.");

        // DEFININDO meta NO CONTAINER REFERENTE A QUANTIDADE DE PLUGINS ARMAZENADOS
        $this->metaCountPlugins = count($this->getPlugins());

        return $plugin;
    }

    public function internalRow(): RowFinal
    {
        if ($this->getContainerType() == 'OnePlugin') {
            $newRow = new RowFinal;
            $lastPlugin = $this->lastPlugin();
            $this->clearPlugins();
            $this->setContainerType('Row');
            $this->storePlugin($newRow);
            $newRow
                ->col()
                ->storePlugin($lastPlugin);

            return $newRow;
        }
    }

    /**
     * Create new Row.
     *
     * @return RowFinal
     * @throws \Exception
     */
    public function row(): RowFinal
    {
        if ($this->getContainerType() == 'Plugins')
            throw new \Exception("Container '{$this->getContainerType()}' does not store rows!");

        if ($this->getContainerType() == 'OnePlugin') {
            $this->internalRow();
            $newRow = $this->row();
        } elseif ($this->getContainerType() == 'Col') {
            $currentCols = $this->getPlugins();
            $this->clearPlugins();
            $newCol = $this->col();
            $newRow = $newCol->row();
            $this->storePlugin($newCol);
            foreach ($currentCols as $col)
                $newRow->storePlugin($col);
        } elseif ($this->getContainerType() == 'Row') {
            $newRow = new RowFinal;
            $this->storePlugin($newRow);
        } else
            throw new \Exception("Invalid container type '{$this->getContainerType()}'.");

        return $newRow;
    }

    /**
     * Create new column.
     *
     * @return ColFinal
     * @throws \Exception
     */
    public function col(): ColFinal
    {
        if ($this->getContainerType() == 'Plugins')
            throw new \Exception("Container '{$this->getContainerType()}' does not store columns!");

        if ($this->getContainerType() == 'OnePlugin') {
            $this->row(); // AQUI O TIPO DO CONTAINER MUDA PARA "Row"
            $newCol = $this->lastPlugin()->col();
        } elseif ($this->getContainerType() == 'Row') {
            $currentRow = $this->lastPlugin();
            $newCol = $currentRow->col();
        } elseif ($this->getContainerType() == 'Col') {
            $newCol = new ColFinal;
            $this->storePlugin($newCol);
        } else
            throw new \Exception("Invalid container type '{$this->getContainerType()}'.");

        return $newCol;
    }

    public function getPlugins(): array
    {
        return $this->plugins;
    }

    public function clearPlugins()
    {
        $this->plugins = [];
    }

    public function storePlugin(PluginAbstract $plugin): PluginAbstract
    {
        $this->plugins[] = $plugin;
        $plugin->setScreen($this->getScreen());
        $plugin->setRow($this instanceof RowFinal
            ? $this
            : $this->getRow());
        $plugin->setCol($this instanceof ColFinal
            ? $this
            : $this->getCol());

        return $plugin;
    }

    public function pluginsIsEmpty()
    {
        return !$this->getPlugins();
    }

    public function lastPlugin()
    {
        return end($this->plugins);
    }

    public function lastPluginIsRow(): bool
    {
        return $this->lastPlugin() instanceof RowFinal;
    }

    public function getHtmlPlugins(): string
    {
        $configFile = $this->getConfig("plugins.{$this->getNamePlugin()}") ?? [];
        foreach ($configFile as $key => $cf) {
            if ($key === 'config.onBefore')
                $configOnBefore = $cf;
        }
        if (isset($configOnBefore)) {
            $configOnBeforeObj = new $configOnBefore;
            if (!$configOnBeforeObj instanceof EventInterface)
                throw new \Exception("$configOnBefore is not an instance of " . EventInterface::class);
            $configOnBeforeObj->run($this);
        }

        $html = '';
        foreach ($this->getPlugins() as $plugin)
            $html .= $plugin->getHtml();

        return $html;
    }
}
