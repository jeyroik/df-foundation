<?php
namespace df\interfaces\applications\samples;

interface IHaveAppSample
{
    public const FIELD__APP_SAMPLE_ID = 'appsid';

    public function getAppSampleId(): string;
    public function setAppSampleId(string $uuid): self;

    public function getAppSample(): ?IAppSample;
}
