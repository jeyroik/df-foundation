<?php
namespace df\interfaces\fields;

use extas\interfaces\IHasClass;
use extas\interfaces\IHasDescription;
use extas\interfaces\IHasName;
use extas\interfaces\IHaveUUID;
use extas\interfaces\IItem;

interface IFieldPlugin extends IItem, IHaveUUID, IHasName, IHasDescription, IHasClass
{
    public const SUBJECT = 'df.field.plugin';
}
