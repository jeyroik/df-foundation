<?php
namespace df\interfaces\anchors;

use df\interfaces\processes\IHaveBP;
use df\interfaces\processes\states\IHaveBPState;
use extas\interfaces\IHasCreatedAt;
use extas\interfaces\IHaveUUID;
use extas\interfaces\IItem;

interface IAnchor extends IItem, IHaveUUID, IHaveBP, IHaveBPState
{
    public const SUBJECT = 'df.anchor';

    public const FIELD__OWNER_ID = 'owner_id';
    
    public function getOwnerId(): string;
    public function setOwnerId(string $uuid): self;
}
