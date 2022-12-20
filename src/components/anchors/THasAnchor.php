<?php
namespace df\components\anchors;

use df\interfaces\anchors\IAnchor;
use df\interfaces\anchors\IHaveAnchor;
use extas\interfaces\repositories\IRepository;

/**
 * @property array $config
 * @method IRepository anchors()
 */
trait THasAnchor
{
    public function getAnchorId(): string
    {
        return $this->config[IHaveAnchor::FIELD__ANCHOR_ID] ?? '';
    }

    public function setAnchorId(string $uuid): self
    {
        $this->config[IHaveAnchor::FIELD__ANCHOR_ID] = $uuid;

        return $this;
    }

    public function getAnchor(): ?IAnchor
    {
        return $this->anchors()->one([
            IAnchor::FIELD__ID => $this->getAnchorId()
        ]);
    }
}
