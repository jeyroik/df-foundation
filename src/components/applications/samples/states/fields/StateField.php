<?php
namespace df\components\applications\samples\states\fields;

use df\components\applications\samples\states\THasAppSampleState;
use df\components\THasExample;
use df\components\values\THasValueValidator;
use df\interfaces\applications\samples\states\fields\IStateField;
use extas\components\Item;
use extas\components\THasDescription;
use extas\components\THasName;
use extas\components\THasStringId;
use extas\components\THasType;
use extas\components\THasValue;

class StateField extends Item implements IStateField
{
    use THasStringId;
    use THasName;
    use THasDescription;
    use THasExample;
    use THasType;
    use THasValueValidator;
    use THasAppSampleState;

    protected function getSubjectForExtension(): string
    {
        return static::SUBJECT;
    }
}
