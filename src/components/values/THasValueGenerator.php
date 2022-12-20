<?php
namespace df\components\values;

use df\components\errors\THasError;
use df\interfaces\values\IHaveValueGenerator;
use df\interfaces\values\IValueGenerator;
use extas\components\THasValue;

/**
 * @property array $config
 */
trait THasValueGenerator
{
    use THasError;
    use THasValue;

    public function getGeneratorRaw(): string
    {
        return $this->config[IHaveValueGenerator::FIELD__VALUE_GENERATOR] ?? '';
    }

    public function getGenerator(): ?IValueGenerator
    {
        $className = $this->getGeneratorRaw();
        /**
         * @var IValueGenerator $g
         */
        return new $className([
            IValueGenerator::FIELD__VALUE => $this->getValue()
        ]);
    }

    public function generateValue(): bool
    {
        $g = $this->getGenerator();
        $generated = $g->generate();
        $this->setError($g->getError());

        return $generated;
    }

    public function getGenerationError(): string
    {
        return $this->getError();
    }
}
