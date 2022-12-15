<?php
namespace df\interfaces\values;

use extas\interfaces\IHasValue;
use extas\interfaces\IItem;

interface IValueValidator extends IItem, IHasValue
{
    public function isValid(): bool;
    public function getError(): string;
}
