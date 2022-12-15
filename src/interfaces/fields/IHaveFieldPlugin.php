<?php
namespace df\interfaces\fields;

interface IHaveFieldPlugin
{
    public const FIELD__PLUGIN_ID = 'plugin_id';

    public function getPluginId(): string;
    public function setPluginId(string $uuid): self;

    public function getPlugin(): ?IFieldPlugin;
}
