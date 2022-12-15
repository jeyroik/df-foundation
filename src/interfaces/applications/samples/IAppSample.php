<?php
namespace df\interfaces\applications\samples;

use df\interfaces\vendors\IHaveVendor;
use extas\interfaces\IHasCreatedAt;
use extas\interfaces\IHasDescription;
use extas\interfaces\IHasName;
use extas\interfaces\IHaveUUID;
use extas\interfaces\IItem;

interface IApplicationSample extends IItem, IHaveUUID, IHasDescription, IHasName, IHasCreatedAt, IHaveVendor
{
    public const SUBJECT = 'df.application.sample';
}
