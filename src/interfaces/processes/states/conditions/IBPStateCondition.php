<?php
namespace df\interfaces\processes\states\conditions;

use df\interfaces\applications\samples\states\fields\IHaveStateField;
use df\interfaces\processes\states\IHaveBPState;
use extas\interfaces\IHasValue;
use extas\interfaces\IHaveUUID;
use extas\interfaces\IItem;

interface IBPStateCondition extends IItem, IHaveUUID, IHaveStateField, IHaveBPState, IHasValue
{
    public const SUBJECT = 'df.bp.state.condition';

    public const FIELD__OPERATOR = 'operator';

    public function getOperator(): string;
    public function setOperator(string $operator): self;
}
