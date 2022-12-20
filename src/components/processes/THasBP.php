<?php
namespace df\components\processes;

use df\interfaces\processes\IBusinessProcess;
use df\interfaces\processes\IHaveBP;
use extas\interfaces\repositories\IRepository;

/**
 * @property array $config
 * @method IRepository businessProcesses()
 */
trait THasBP
{
    public function getBPId(): string
    {
        return $this->config[IHaveBP::FIELD__BP_ID] ?? '';
    }

    public function setBPId(string $uuid): self
    {
        $this->config[IHaveBP::FIELD__BP_ID] = $uuid;

        return $this;
    }

    public function getBP(): ?IBusinessProcess
    {
        return $this->businessProcesses()->one([
            IBusinessProcess::FIELD__ID => $this->getBPId()
        ]);
    }
}
