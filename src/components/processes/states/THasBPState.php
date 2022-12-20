<?php
namespace df\components\processes\states;

use df\interfaces\processes\states\IBPState;
use df\interfaces\processes\states\IHaveBPState;
use extas\interfaces\repositories\IRepository;

/**
 * @property array $config
 * @method IRepository bpStates()
 */
trait THasBPState
{
    public function getBPStateId(): string
    {
        return $this->config[IHaveBPState::FIELD__BP_STATE_ID] ?? '';
    }

    public function setBPStateId(string $uuid): IHaveBPState
    {
        $this->config[IHaveBPState::FIELD__BP_STATE_ID] = $uuid;

        return $this;
    }

    public function getBPState(): ?IBPState
    {
        return $this->bpStates()->one([
            IBPState::FIELD__ID => $this->getBPStateId()
        ]);
    }
}
