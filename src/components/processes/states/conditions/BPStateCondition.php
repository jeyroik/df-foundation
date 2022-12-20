<?php
namespace df\components\processes\states\conditions;

use df\components\applications\samples\states\fields\THasStateField;
use df\components\processes\states\THasBPState;
use df\interfaces\processes\states\conditions\IBPStateCondition;
use extas\components\Item;
use extas\components\THasStringId;
use extas\components\THasValue;

class BPStateCondition extends Item implements IBPStateCondition
{
    use THasStringId;
    use THasValue;
    use THasBPState;
    use THasStateField;

    public function getOperator(): string
    {
        return $this->config[static::FIELD__OPERATOR] ?? '';
    }

    public function setOperator(string $operator): IBPStateCondition
    {
        $this->config[static::FIELD__OPERATOR] = $operator;

        return $this;
    }

    protected function getSubjectForExtension(): string
    {
        return static::SUBJECT;
    }
}
