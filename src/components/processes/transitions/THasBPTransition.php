<?php
namespace df\components\processes\transitions;

use df\interfaces\processes\transitions\IBPTransition;
use df\interfaces\processes\transitions\IHaveBPTransition;
use extas\interfaces\repositories\IRepository;

/**
 * @property array $config
 * @method IRepository bpTransitions()
 */
trait THasBPTransition
{
    public function getTransitionId(): string
    {
        return $this->config[IHaveBPTransition::FIELD__TRANSITION_ID] ?? '';
    }

    public function setTransitionId(string $uuid): IHaveBPTransition
    {
        $this->config[IHaveBPTransition::FIELD__TRANSITION_ID] = $uuid;

        return $this;
    }

    public function getTransition(): ?IBPTransition
    {
        return $this->bpTransitions()->one([
            IBPTransition::FIELD__ID => $this->getTransitionId()
        ]);
    }
}
