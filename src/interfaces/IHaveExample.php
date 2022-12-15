<?php
namespace df\interfaces;

interface IHaveExample
{
    public const FIELD__EXAMPLE = 'example';

    public function getExample(): string;
    public function setExample(string $example): self;
}
