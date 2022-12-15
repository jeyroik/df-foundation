<?php
namespace df\interfaces\applications\samples;

use df\interfaces\IHaveExample;
use df\interfaces\values\IHaveValueGenerator;
use df\interfaces\values\IHaveValueValidator;
use extas\interfaces\IHasDescription;
use extas\interfaces\IHasName;
use extas\interfaces\IHasType;
use extas\interfaces\IHasValue;
use extas\interfaces\IHaveUUID;
use extas\interfaces\IItem;

interface IApplSampleSetting extends 
    IItem, IHaveUUID, IHasName, IHasDescription, IHasType, IHasValue,
    IHaveAppSample, IHaveExample, IHaveValueValidator, IHaveValueGenerator
{
    public const SUBJECT = 'df.app.sample.setting';
}
