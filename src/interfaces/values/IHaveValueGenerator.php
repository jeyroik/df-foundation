<?php
namespace df\interfaces\values;

use extas\interfaces\IHasValue;

interface IHaveValueGenerator extends IHasValue
{
    public const FIELD__VALUE_GENERATOR = 'v_generator';

    public function getGeneratorRaw(): string;
    public function getGenerator(): ?IValueGenerator;
    public function generateValue(): bool;
    public function getGenerationError(): string;
}
