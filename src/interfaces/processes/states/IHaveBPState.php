<?php
namespace df\interfaces\processes\states;

interface IHaveBPState
{
    public const FIELD__BP_STATE_ID = 'bp_state_id';

    public function getBPStateId(): string;
    public function setBPStateId(string $uuid): self;

    public function getBPState(): ?IBPState;
}
