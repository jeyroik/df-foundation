<?php
namespace df\components\applications\samples\states;

use df\components\applications\samples\THasAppSample;
use df\interfaces\applications\samples\states\IAppSampleState;
use extas\components\Item;
use extas\components\THasDescription;
use extas\components\THasName;
use extas\components\THasStringId;

class AppSampleState extends Item implements IAppSampleState
{
    use THasStringId;
    use THasName;
    use THasDescription;
    use THasAppSample;

    protected function getSubjectForExtension(): string
    {
        return static::SUBJECT;
    }
}
