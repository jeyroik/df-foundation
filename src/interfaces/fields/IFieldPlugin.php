<?php
namespace df\interfaces\fields;

use extas\interfaces\IDispatcherWrapper;
use extas\interfaces\IHaveUUID;
use extas\interfaces\IItem;

interface IFieldPlugin extends IItem, IHaveUUID, IDispatcherWrapper
{
    public const SUBJECT = 'df.field.plugin';
}
