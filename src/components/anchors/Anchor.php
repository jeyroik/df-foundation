<?php
namespace df\components\anchors;

use df\components\processes\states\THasBPState;
use df\components\processes\THasBP;
use df\interfaces\anchors\IAnchor;
use extas\components\Item;
use extas\components\THasStringId;

class Anchor extends Item implements IAnchor
{
    use THasStringId;
    use THasBP;
    use THasBPState;

    public function getOwnerId(): string
    {
        return $this->config[static::FIELD__OWNER_ID] ?? '';
    }

    public function setOwnerId(string $uuid): IAnchor
    {
        $this->config[static::FIELD__OWNER_ID] = $uuid;

        return $this;
    }

    protected function getSubjectForExtension(): string
    {
        return static::SUBJECT;
    }
}
