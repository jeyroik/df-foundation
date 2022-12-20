<?php
namespace df\interfaces\anchors;

interface IHaveAnchor
{
    public const FIELD__ANCHOR_ID = 'anchor_id';

    public function getAnchorId(): string;
    public function setAnchorId(string $uuid): self;
    public function getAnchor(): ?IAnchor;
}
