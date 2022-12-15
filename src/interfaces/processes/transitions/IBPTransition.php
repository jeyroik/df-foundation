<?php
namespace df\interfaces\processes\transitions;

use df\interfaces\processes\states\IBPState;
use extas\interfaces\IHasDescription;
use extas\interfaces\IHasName;
use extas\interfaces\IHaveUUID;
use extas\interfaces\IItem;

interface IBPTransition extends IItem, IHaveUUID, IHasName, IHasDescription
{
    public const SUBJECT = 'df.bp.transition';

    public const FIELD__SOURCE_ID = 'sid';
    public const FIELD__TARGET_ID = 'tid';

    public function getSourceId(): string;
    public function setSourceId(string $uuid): self;

    public function getTargetId(): string;
    public function setTargetId(string $uuid): self;

    public function getSource(): ?IBPState;
    public function getTarget(): ?IBPState;
}
