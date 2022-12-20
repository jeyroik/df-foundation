<?php
namespace df\components\applications\settings;

use df\components\applications\THasApplication;
use df\interfaces\applications\settings\IAppSetting;
use extas\components\Item;
use extas\components\THasDescription;
use extas\components\THasName;
use extas\components\THasStringId;
use extas\components\THasType;
use extas\components\THasValue;

class AppSetting extends Item implements IAppSetting
{
    use THasStringId;
    use THasName;
    use THasDescription;
    use THasType;
    use THasValue;
    use THasApplication;

    protected function getSubjectForExtension(): string
    {
        return static::SUBJECT;
    }
}
