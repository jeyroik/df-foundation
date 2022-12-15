<?php
namespace df\interfaces\applications\samples\states\fields;

use df\interfaces\IHaveExample;
use df\interfaces\values\IHaveValueValidator;
use extas\interfaces\IHasDescription;
use extas\interfaces\IHasName;
use extas\interfaces\IHasType;
use extas\interfaces\IHasValue;
use extas\interfaces\IHaveUUID;
use extas\interfaces\IItem;

interface IStateField extends IItem, IHaveUUID, IHasName, IHasDescription, IHasType, IHaveExample, IHaveValueValidator
{
    public const SUBJECT = 'df.app.sample.state.field';
}
