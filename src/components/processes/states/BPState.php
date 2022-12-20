<?php
namespace df\components\processes\states;

use df\components\applications\samples\states\THasAppSampleState;
use df\components\applications\THasApplication;
use df\components\processes\THasBP;
use df\interfaces\processes\states\IBPState;
use extas\components\Item;
use extas\components\THasDescription;
use extas\components\THasName;
use extas\components\THasStringId;

class BPState extends Item implements IBPState
{
    use THasStringId;
    use THasName;
    use THasDescription;
    use THasAppSampleState;
    use THasApplication;
    use THasBP;

    protected function getSubjectForExtension(): string
    {
        return static::SUBJECT;
    }
}
