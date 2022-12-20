<?php
namespace df\components\fields;

use df\interfaces\fields\IFieldPlugin;
use df\interfaces\fields\IHaveFieldPlugin;
use extas\interfaces\repositories\IRepository;

/**
 * @property array $config
 * @method IRepository fieldPlugins()
 */
trait THasFieldPlugin
{
    public function getPluginId(): string
    {
        return $this->config[IHaveFieldPlugin::FIELD__PLUGIN_ID] ?? '';
    }

    public function setPluginId(string $uuid): IHaveFieldPlugin
    {
        $this->config[IHaveFieldPlugin::FIELD__PLUGIN_ID] = $uuid;

        return $this;
    }

    public function getPlugin(): ?IFieldPlugin
    {
        return $this->fieldPlugins()->one([
            IFieldPlugin::FIELD__ID => $this->getPluginId()
        ]);
    }
}
