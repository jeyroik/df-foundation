<?php
namespace df\interfaces\anchors\stats;

use df\interfaces\anchors\IHaveAnchor;
use extas\interfaces\IHaveUUID;
use extas\interfaces\IItem;

interface IAnchorStat extends IItem, IHaveUUID, IHaveAnchor
{
    public const SUBJECT = 'df.anchor.stat';

    public const FIELD__LAST_EXECUTED_AT = 'last_executed_at';
    public const FIELD__EXECUTION_COUNT = 'execution_count';

    public function getLastExecutedAt(): int;
    public function getExecutionCount(): int;

    public function setLastExecutionAt(int $timeInSeconds): self;
    public function setExecutionCount(int $count): self;
    public function incExecutionCount(): self;
}
