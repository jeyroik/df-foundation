<?php
namespace df\interfaces\values;

use df\interfaces\errors\IHaveError;
use extas\interfaces\IHasValue;
use extas\interfaces\IItem;

interface IValueValidator extends IItem, IHasValue, IHaveError
{
    public const SUBJECT = 'df.value.validator';

    public function isValid(): bool;
}
