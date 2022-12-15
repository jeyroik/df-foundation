<?php
namespace df\interfaces\processes\transitions;

interface IHaveBPTransition
{
    public const FIELD__TRANSITION_ID = 'transition_id';

    public function getTransitionId(): string;
    public function setTransitionId(string $uuid): self;

    public function getTransition(): ?IBPTransition;
}
