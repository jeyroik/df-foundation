<?php
namespace df\components\applications;

use df\interfaces\applications\IApplication;
use df\interfaces\applications\IHaveApplication;
use extas\interfaces\repositories\IRepository;

/**
 * @property array $config
 * @method IRepository applications()
 */
trait THasApplication
{
    public function getApplicationId(): string
    {
        return $this->config[IHaveApplication::FIELD__APPLICATION_ID] ?? '';
    }

    public function setApplicationId(string $uuid): IHaveApplication
    {
        $this->config[IHaveApplication::FIELD__APPLICATION_ID] = $uuid;

        return $this;
    }

    public function getApplication(): ?IApplication
    {
        return $this->applications()->one([
            IApplication::FIELD__ID => $this->getApplicationId()
        ]);
    }
}
