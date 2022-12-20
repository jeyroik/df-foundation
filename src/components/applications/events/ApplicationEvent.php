<?php
namespace df\components\applications\events;

use df\interfaces\applications\IApplicationEvent;
use extas\components\Item;

class ApplicationEvent extends Item implements IApplicationEvent
{
    protected function getSubjectForExtension(): string
    {
        return static::SUBJECT;
    }
}
