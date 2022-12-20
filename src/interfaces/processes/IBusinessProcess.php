<?php
namespace df\interfaces\processes;

use extas\interfaces\IHasDescription;
use extas\interfaces\IHasName;
use extas\interfaces\IHaveUUID;
use extas\interfaces\IItem;

interface IBusinessProcess extends IItem, IHaveUUID, IHasName, IHasDescription
{
    public const SUBJECT = 'df.bp';
}
