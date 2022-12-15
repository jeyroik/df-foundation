<?php
namespace df\interfaces\applications\samples\states\fields;

interface IHaveStateField
{
    public const FIELD__STATE_FIELD_ID = 'sfid';

    public function getStateFieldId(): string;
    public function setStateFieldId(string $uuid): self;

    public function getStateField(): ?IStateField;
}
