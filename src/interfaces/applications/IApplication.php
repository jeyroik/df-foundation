<?php
namespace df\interfaces\applications;

use df\interfaces\applications\samples\IHaveAppSample;
use extas\interfaces\IHasDescription;
use extas\interfaces\IHasName;
use extas\interfaces\IHaveUUID;
use extas\interfaces\IItem;

interface IApplication extends IItem, IHaveUUID, IHasName, IHasDescription, IHaveAppSample
{
    public const SUBJECT = 'df.app';
}
