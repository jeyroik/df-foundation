<?php
namespace df\components\vendors;

use df\interfaces\vendors\IVendor;
use extas\components\Item;
use extas\components\THasDescription;
use extas\components\THasName;
use extas\components\THasStringId;

class Vendor extends Item implements IVendor
{
    use THasStringId;
    use THasName;
    use THasDescription;

    protected function getSubjectForExtension(): string
    {
        return static::SUBJECT;
    }
}
