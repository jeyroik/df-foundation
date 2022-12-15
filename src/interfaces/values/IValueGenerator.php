<?php
namespace df\interfaces\values;

use extas\interfaces\IHasValue;
use extas\interfaces\IItem;

interface IValueGenerator extends IItem, IHasValue
{
    public function generate(): bool;
    public function getError(): string;
}
