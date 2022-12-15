<?php
namespace df\interfaces\applications;

interface IHaveApplication
{
    public const FIELD__APPLICATION_ID = 'appid';

    public function getApplicationId(): string;
    public function setApplicationId(string $uuid): self;

    public function getApplication(): ?IApplication;
}
