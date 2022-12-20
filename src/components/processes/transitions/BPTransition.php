<?php
namespace df\components\processes\transitions;

use df\interfaces\processes\states\IBPState;
use df\interfaces\processes\transitions\IBPTransition;
use extas\components\Item;
use extas\components\THasDescription;
use extas\components\THasName;
use extas\components\THasStringId;
use extas\interfaces\repositories\IRepository;

/**
 * @method IRepository bpStates()
 */
class BPTransition extends Item implements IBPTransition
{
    use THasStringId;
    use THasName;
    use THasDescription;

    public function getSourceId(): string
    {
        return $this->config[static::FIELD__SOURCE_ID] ?? '';
    }

    public function setSourceId(string $uuid): self
    {
        $this->config[static::FIELD__SOURCE_ID] = $uuid;

        return $this;
    }

    public function getSource(): ?IBPState
    {
        return $this->bpStates()->one([
            IBPState::FIELD__ID => $this->getSourceId()
        ]);
    }

    public function getTargetId(): string
    {
        return $this->config[static::FIELD__TARGET_ID] ?? '';
    }

    public function setTargetId(string $uuid): self
    {
        $this->config[static::FIELD__TARGET_ID] = $uuid;

        return $this;
    }

    public function getTarget(): ?IBPState
    {
        return $this->bpStates()->one([
            IBPState::FIELD__ID => $this->getTargetId()
        ]);
    }

    protected function getSubjectForExtension(): string
    {
        return static::SUBJECT;
    }
}
