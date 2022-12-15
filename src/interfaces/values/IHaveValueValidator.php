<?php
namespace df\interfaces\values;

use extas\interfaces\IHasValue;

interface IHaveValueValidator extends IHasValue
{
    public const FIELD__VALUE_VALIDATOR = 'v_validator';

    public function getValidatorRaw(): string;
    public function getValidator(): ?IValueValidator;
    public function isValueValid(): bool;
    public function getValueError(): string;
}
