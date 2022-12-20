<?php
namespace df\components\processes;

use df\interfaces\processes\IBusinessProcess;
use extas\components\Item;
use extas\components\THasDescription;
use extas\components\THasName;
use extas\components\THasStringId;

class BusinessProcess extends Item implements IBusinessProcess
{
    use THasStringId;
    use THasName;
    use THasDescription;

    protected function getSubjectForExtension(): string
    {
        return static::SUBJECT;
    }
}
