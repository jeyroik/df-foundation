<?php
namespace df\interfaces\processes;

/**
 * BP: Business Process
 */
interface IHaveBP
{
    public const FIELD__BP_ID = 'bpid';

    public function getBPId(): string;
    public function setBPId(string $uuid): self;

    public function getBP(): ?IBusinessProcess;
}
