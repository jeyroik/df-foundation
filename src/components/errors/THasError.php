<?php
namespace df\components\errors;

use df\interfaces\errors\IHaveError;

/**
 * @property array $config
 */
trait THasError
{
    public function getError(): string
    {
        return $this->config[IHaveError::FIELD__ERRROR] ?? '';
    }

    protected function setError(string $message): self
    {
        $this->config[IHaveError::FIELD__ERRROR] = $message;

        return $this;
    }
}
