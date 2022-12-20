<?php
namespace df\components\applications\samples\settings;

use df\components\applications\samples\THasAppSample;
use df\components\THasExample;
use df\components\values\THasValueGenerator;
use df\components\values\THasValueValidator;
use df\interfaces\applications\samples\settings\IAppSampleSetting;
use extas\components\Item;
use extas\components\THasDescription;
use extas\components\THasName;
use extas\components\THasStringId;
use extas\components\THasType;

class AppSampleSetting extends Item implements IAppSampleSetting
{
    use THasStringId;
    use THasName;
    use THasDescription;
    use THasExample;
    use THasValueValidator;
    use THasValueGenerator;
    use THasType;
    use THasAppSample;

    protected function getSubjectForExtension(): string
    {
        return static::SUBJECT;
    }
}
