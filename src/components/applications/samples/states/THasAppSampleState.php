<?php
namespace df\components\applications\samples\states;

use df\interfaces\applications\samples\states\IAppSampleState;
use df\interfaces\applications\samples\states\IHaveAppSampleState;
use extas\interfaces\repositories\IRepository;

/**
 * @property array $config
 * @method IRepository appSampleStates()
 */
trait THasAppSampleState
{
    public function getAppSampleStateId(): string
    {
        return $this->config[IHaveAppSampleState::FIELD__APPS_STATE_ID] ?? '';
    }

    public function setAppSampleStateId(string $uuid): self
    {
        $this->config[IHaveAppSampleState::FIELD__APPS_STATE_ID] = $uuid;

        return $this;
    }

    public function getAppSampleState(): ?IAppSampleState
    {
        return $this->appSampleStates()->one([
            IAppSampleState::FIELD__ID => $this->getAppSampleStateId()
        ]);
    }
}
