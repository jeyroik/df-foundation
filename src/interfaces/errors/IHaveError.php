<?php
namespace df\interfaces\errors;

interface IHaveError
{
    public const FIELD__ERRROR = 'error';

    public function getError(): string;
}
