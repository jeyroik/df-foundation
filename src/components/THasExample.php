<?php
namespace df\components;

use df\interfaces\IHaveExample;

/**
 * @property array $config
 */
trait THasExample
{
    public function getExample(): string
    {
        return $this->config[IHaveExample::FIELD__EXAMPLE] ?? '';
    }

    public function setExample(string $example): self
    {
        $this->config[IHaveExample::FIELD__EXAMPLE] = $example;

        return $this;
    }
}
