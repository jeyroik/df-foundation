<?php
namespace df\components\fields;

use df\interfaces\fields\IFieldPluginTarget;
use extas\components\Item;
use extas\components\THasStringId;
use extas\interfaces\IHaveUUID;

class FieldPluginTarget extends Item implements IFieldPluginTarget
{
    use THasStringId;
    use THasFieldPlugin;

    public function getTargetId(): string
    {
        return $this->config[static::FIELD__TARGET_ID] ?? '';
    }

    public function setTargetId(string $uuid): IFieldPluginTarget
    {
        $this->config[static::FIELD__TARGET_ID] = $uuid;

        return $this;
    }

    public function getTarget(string $targetRepoName): ?IHaveUUID
    {
        return $this->$targetRepoName()->one([
            IHaveUUID::FIELD__ID => $this->getTargetId()
        ]);
    }

    protected function getSubjectForExtension(): string
    {
        return static::SUBJECT;
    }
}
