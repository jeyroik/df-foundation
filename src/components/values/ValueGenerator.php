<?php
namespace df\components\values;

use df\components\errors\THasError;
use df\interfaces\values\IValueGenerator;
use extas\components\Item;
use extas\components\THasValue;

/**
 * @property array $config
 */
abstract class ValueGenerator extends Item implements IValueGenerator
{
    use THasValue;
    use THasError;

    public function generate(): bool
    {
        try {
            return $this->generateValue();
        } catch (\Exception $e) {
            $this->setError($e->getMessage());
            return false;
        }
    }

    protected function getSubjectForExtension(): string
    {
        return static::SUBJECT;
    }

    abstract protected function generateValue(): bool;
}
