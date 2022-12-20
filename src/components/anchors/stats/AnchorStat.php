<?php
namespace df\components\anchors\stats;

use df\components\anchors\THasAnchor;
use df\interfaces\anchors\stats\IAnchorStat;
use extas\components\Item;
use extas\components\THasStringId;

class AnchorStat extends Item implements IAnchorStat
{
    use THasStringId;
    use THasAnchor;

    public function getLastExecutedAt(): int
    {
        return $this->config[static::FIELD__LAST_EXECUTED_AT] ?? 0;
    }

    public function setLastExecutionAt(int $timeInSeconds): self
    {
        $this->config[static::FIELD__LAST_EXECUTED_AT] = $timeInSeconds;

        return $this;
    }

    public function getExecutionCount(): int
    {
        return $this->config[static::FIELD__EXECUTION_COUNT] ?? 0;
    }

    public function setExecutionCount(int $count): self
    {
        $this->config[static::FIELD__EXECUTION_COUNT] = $count;

        return $this;
    }

    public function incExecutionCount(): self
    {
        return $this->setExecutionCount($this->getExecutionCount()+1);
    }

    protected function getSubjectForExtension(): string
    {
        return static::SUBJECT;
    }
}
