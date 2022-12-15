<?php
namespace df\interfaces\processes;

interface IHaveBusinessProcess
{
    public const FIELD__BP_ID = 'bpid';

    public function getBusinessProcessId(): string;
    public function setBusinessProccessId(string $uuid): self;

    public function getBusinessProcess(): ?IBusinessProcess;
}
