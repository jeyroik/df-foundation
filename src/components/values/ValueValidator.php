<?php
namespace df\components\values;

use df\components\errors\THasError;
use df\interfaces\values\IValueValidator;
use extas\components\Item;
use extas\components\THasValue;

abstract class ValueValidator extends Item implements IValueValidator
{
    use THasValue;
    use THasError;

    public function isValid(): bool
    {
        try {
            return $this->isValueValid();
        } catch (\Exception $e) {
            $this->setError($e->getMessage());
            return false;
        }
    }

    protected function getSubjectForExtension(): string
    {
        return static::SUBJECT;
    }

    /**
     * @throws \Exception
     */
    abstract protected function isValueValid(): bool;
}
