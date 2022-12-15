<?php
namespace df\interfaces\processes\transitions\fields;

use df\interfaces\applications\samples\states\fields\IHaveStateField;
use df\interfaces\processes\transitions\IHaveBPTransition;
use extas\interfaces\IHasValue;
use extas\interfaces\IHaveUUID;
use extas\interfaces\IItem;

interface ITransitionField extends IItem, IHaveUUID, IHasValue, IHaveBPTransition, IHaveStateField
{
    public const SUBJECT = 'df.bp.transition.field';
}
