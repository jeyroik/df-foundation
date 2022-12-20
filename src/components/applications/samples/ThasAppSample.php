<?php
namespace df\components\applications\samples;

use df\interfaces\applications\samples\IAppSample;
use df\interfaces\applications\samples\IHaveAppSample;
use extas\interfaces\repositories\IRepository;

/**
 * @property array $config
 * @method IRepository appSamples()
 */
trait THasAppSample
{
    public function getAppSampleId(): string
    {
        return $this->config[IHaveAppSample::FIELD__APP_SAMPLE_ID] ?? '';
    }

    public function setAppSampleId(string $uuid): self
    {
        $this->config[IHaveAppSample::FIELD__APP_SAMPLE_ID] = $uuid;

        return $this;
    }

    public function getAppSample(): ?IAppSample
    {
        return $this->appSamples()->one([
            IAppSample::FIELD__ID => $this->getAppSampleId()
        ]);
    }
}
