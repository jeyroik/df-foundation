<?php
namespace df\interfaces\processes\states;

use df\interfaces\applications\IHaveApplication;
use df\interfaces\applications\samples\states\IHaveAppSampleState;
use df\interfaces\processes\IHaveBP;
use extas\interfaces\IHasDescription;
use extas\interfaces\IHasName;
use extas\interfaces\IHaveUUID;
use extas\interfaces\IItem;

interface IBPState extends IItem, IHaveUUID, IHasName, IHasDescription, IHaveAppSampleState, IHaveApplication, IHaveBP
{
    public const SUBJECT = 'df.bp.state';
}
