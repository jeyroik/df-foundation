<?php
namespace df\components\values;

use df\components\errors\THasError;
use df\interfaces\values\IHaveValueValidator;
use df\interfaces\values\IValueValidator;
use extas\components\THasValue;

/**
 * @property array $config
 */
trait THasValueValidator
{
    use THasValue;
    use THasError;

    public function getValidatorRaw(): string
    {
        return $this->config[IHaveValueValidator::FIELD__VALUE_VALIDATOR] ?? '';
    }

    public function getValidator(): ?IValueValidator
    {
        $className = $this->getValidatorRaw();

        return new $className([
            IValueValidator::FIELD__VALUE => $this->getValue()
        ]);
    }

    public function isValueValid(): bool
    {
        $v = $this->getValidator();
        $isValid = $v->isValid();
        $this->setError($v->getError());

        return $isValid;
    }

    public function getValueError(): string
    {
        return $this->getError();
    }
}
