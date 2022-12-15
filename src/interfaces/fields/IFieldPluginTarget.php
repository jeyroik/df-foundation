<?php
namespace df\interfaces\fields;

use extas\interfaces\IHaveUUID;
use extas\interfaces\IItem;

interface IFieldPluginTarget extends IItem, IHaveUUID, IHaveFieldPlugin
{
    public const SUBJECT = 'df.field.plugin.target';

    public const FIELD__TARGET_ID = 'target_id';

    public function getTargetId(): string;
    public function setTargetId(string $uuid): self;

    public function getTarget(string $targetRepoName): ?IHaveUUID;
}
