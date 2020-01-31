<?php

namespace MoreiraAndre\LaraHtml\Traits;

use MoreiraAndre\LaraHtml\PluginAbstract;

trait Config
{
    public function setConfig(PluginAbstract $plugin, array $arguments)
    {
        $configFile = $this->getConfig("plugins.{$plugin->getNamePlugin()}");
        if (!$configFile)
            throw new \Exception("Plugin {$plugin->getNamePlugin()} not exists in config file!");
        $configCount = 0;
        foreach ($configFile as $indexConfigFile => $valueConfigFile) {
            if (is_int($indexConfigFile)) { // CONFIGURAÇÃO SEM VALOR - OBRIGATÓRIO INFORMAR NA CRIAÇÃO DO PLUGIN
                if (strpos($valueConfigFile, 'meta.') === 0) {
                    $meta = str_replace('meta.', '', $valueConfigFile);
                    if (isset($arguments[$configCount]))
                        $plugin->meta($meta, $arguments[$configCount]);
                } elseif (strpos($valueConfigFile, 'config.') === 0) {
                    $configOfPlugin = str_replace('config.', '', $valueConfigFile);
                    if (isset($arguments[$configCount])) {
                        switch ($configOfPlugin) {
                            case 'nameBlade':
                                $plugin->setNameBlade($arguments[$configCount]);
                                break;
                            case 'containerType':
                                $plugin->setContainerType($arguments[$configCount]);
                                break;
                            default:
                                if (!in_array($arguments[$configCount], ['onBefore', 'onAfter']))
                                    throw new \Exception("Invalid config '{$configOfPlugin}' for '{$plugin->getNamePlugin()}' plugin.");
                        }
                    }
                } else
                    if (isset($arguments[$configCount]))
                        $plugin->attr($valueConfigFile, $arguments[$configCount]);
            } else { // VALOR ESTÁ PRÉ-DEFINIDO NO ARQUIVO DE CONFIGURAÇÃO
                if (strpos($indexConfigFile, 'meta.') === 0) {
                    $meta = str_replace('meta.', '', $indexConfigFile);
                    if (isset($arguments[$configCount]))
                        $plugin->meta($meta, $arguments[$configCount]);
                    else {
                        if (strpos($valueConfigFile, 'eval.') === 0) {
                            $eval = str_replace('eval.', '', $valueConfigFile);
                            $listAttr = $plugin->getAttr();
                            $listMeta = $plugin->getMeta();
                            eval("\$eval = $eval;");
                            $plugin->meta($meta, $eval);
                        } else
                            $plugin->meta($meta, $valueConfigFile);
                    }
                } elseif (strpos($indexConfigFile, 'config.') === 0) {
                    $configOfPlugin = str_replace('config.', '', $indexConfigFile);
                    switch ($configOfPlugin) {
                        case 'nameBlade':
                            if (isset($arguments[$configCount]))
                                $plugin->setNameBlade($arguments[$configCount]);
                            else
                                $plugin->setNameBlade($valueConfigFile);
                            break;
                        case 'containerType':
                            if (isset($arguments[$configCount]))
                                $plugin->setContainerType($arguments[$configCount]);
                            else
                                $plugin->setContainerType($valueConfigFile);
                            break;
                        default:
                            if (!in_array($configOfPlugin, ['onBefore', 'onAfter']))
                                throw new \Exception("Invalid config '{$configOfPlugin}' for '{$plugin->getNamePlugin()}' plugin.");
                    }
                } else
                    if (isset($arguments[$configCount]))
                        $plugin->attr($indexConfigFile, $arguments[$configCount]);
                    else {
                        if (strpos($valueConfigFile, 'eval.') === 0) {
                            $eval = str_replace('eval.', '', $valueConfigFile);
                            $listAttr = $plugin->getAttr();
                            $listMeta = $plugin->getMeta();
                            eval("\$eval = $eval;");
                            $plugin->attr($indexConfigFile, $eval);
                        } else
                            $plugin->attr($indexConfigFile, $valueConfigFile);
                    }
            }
            $configCount++;
        }
    }
}
