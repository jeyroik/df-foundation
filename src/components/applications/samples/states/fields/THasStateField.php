<?php
namespace df\components\applications\samples\states\fields;

use df\interfaces\applications\samples\states\fields\IHaveStateField;
use df\interfaces\applications\samples\states\fields\IStateField;
use extas\interfaces\repositories\IRepository;

/**
 * @property array $config
 * @method IRepository stateFields()
 */
trait THasStateField
{
    public function getStateField(): ?IStateField
    {
        return $this->stateFields()->one([
            IStateField::FIELD__ID => $this->getStateFieldId()
        ]);
    }

    public function getStateFieldId(): string
    {
        return $this->config[IHaveStateField::FIELD__STATE_FIELD_ID] ?? '';
    }

    public function setStateFieldId(string $uuid): IHaveStateField
    {
        $this->config[IHaveStateField::FIELD__STATE_FIELD_ID] = $uuid;

        return $this;
    }
}
