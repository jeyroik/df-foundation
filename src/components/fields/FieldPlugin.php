<?php
namespace df\components\fields;

use df\interfaces\fields\IFieldPlugin;
use extas\components\Item;
use extas\components\TDispatcherWrapper;
use extas\components\THasStringId;

class FieldPlugin extends Item implements IFieldPlugin
{
    use THasStringId;
    use TDispatcherWrapper;

    protected function getSubjectForExtension(): string
    {
        return static::SUBJECT;
    }
}
