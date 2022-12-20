<?php
namespace df\interfaces\applications\samples\states;

interface IHaveAppSampleState
{
    public const FIELD__APPS_STATE_ID = 'sample_state_id';

    public function getAppSampleStateId(): string;
    public function setAppSampleStateId(string $uuid): self;

    public function getAppSampleState(): ?IAppSampleState;
}
