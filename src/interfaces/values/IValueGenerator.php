<?php
namespace df\interfaces\values;

use df\interfaces\errors\IHaveError;
use extas\interfaces\IHasValue;
use extas\interfaces\IItem;

interface IValueGenerator extends IItem, IHasValue, IHaveError
{
    public const SUBJECT = 'df.value.generator';

    public function generate(): bool;
}
