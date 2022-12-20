<?php
namespace df\interfaces\applications\settings;

use df\interfaces\applications\IHaveApplication;
use extas\interfaces\IHasDescription;
use extas\interfaces\IHasName;
use extas\interfaces\IHasType;
use extas\interfaces\IHasValue;
use extas\interfaces\IHaveUUID;
use extas\interfaces\IItem;

interface IAppSetting extends IItem, IHaveUUID, IHasName, IHasDescription, IHasType, IHasValue, IHaveApplication
{
    public const SUBJECT = 'df.app.setting';
}