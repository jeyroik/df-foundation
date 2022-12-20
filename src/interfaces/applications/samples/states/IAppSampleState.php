<?php
namespace df\interfaces\applications\samples\states;

use df\interfaces\applications\samples\IHaveAppSample;
use extas\interfaces\IHasDescription;
use extas\interfaces\IHasName;
use extas\interfaces\IHaveUUID;
use extas\interfaces\IItem;

interface IAppSampleState extends IItem, IHaveUUID, IHasName, IHasDescription, IHaveAppSample
{
    public const SUBJECT = 'df.app.sample.state';
}
