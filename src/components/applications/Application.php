<?php
namespace df\components\applications;

use df\components\applications\samples\THasAppSample;
use df\interfaces\applications\IApplication;
use extas\components\Item;
use extas\components\THasDescription;
use extas\components\THasName;
use extas\components\THasStringId;

class Application extends Item implements IApplication
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
