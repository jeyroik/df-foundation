<?php
namespace df\components\applications\samples;

use df\components\vendors\THasVendor;
use df\interfaces\applications\samples\IAppSample;
use extas\components\Item;
use extas\components\THasCreatedAt;
use extas\components\THasDescription;
use extas\components\THasName;
use extas\components\THasStringId;

class AppSample extends Item implements IAppSample
{
    use THasStringId;
    use THasDescription;
    use THasName;
    use THasCreatedAt;
    use THasVendor;

    protected function getSubjectForExtension(): string
    {
        return static::SUBJECT;
    }
}
