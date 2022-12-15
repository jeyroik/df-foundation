<?php
namespace df\interfaces\applications;

use df\interfaces\applications\samples\IHaveApplicationSample;
use extas\interfaces\IHasDescription;
use extas\interfaces\IHasName;
use extas\interfaces\IHaveUUID;
use extas\interfaces\IItem;

interface IApplication extends IItem, IHaveUUID, IHasName, IHasDescription, IHaveApplicationSample
{
    public const SUBJECT = 'df.application';
}
