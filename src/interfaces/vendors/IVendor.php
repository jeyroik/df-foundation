<?php
namespace df\interfaces\vendors;

use extas\interfaces\IHasDescription;
use extas\interfaces\IHasName;
use extas\interfaces\IHaveUUID;
use extas\interfaces\IItem;

interface IVendor extends IItem, IHaveUUID, IHasName, IHasDescription
{
    public const SUBJECT = 'df.vendor';
}
