<?php
namespace df\interfaces\applications;

use extas\interfaces\IItem;

interface IApplicationEvent extends IItem
{
    public const SUBJECT = 'df.app.event';
}
