<?php
namespace df\components\processes\transitions\fields;

use df\components\applications\samples\states\fields\THasStateField;
use df\components\processes\transitions\THasBPTransition;
use df\interfaces\processes\transitions\fields\IBPTransitionField;
use extas\components\Item;
use extas\components\THasStringId;
use extas\components\THasValue;

class BPTransitionField extends Item implements IBPTransitionField
{
    use THasStringId;
    use THasValue;
    use THasBPTransition;
    use THasStateField;

    protected function getSubjectForExtension(): string
    {
        return static::SUBJECT;
    }
}
