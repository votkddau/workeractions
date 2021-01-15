<?php

namespace Victor\WorkerRoles\Enums;

class ActionEnum extends BaseEnum
{
    const WRITE_CODE = 'writeCode';
    const TEST_CODE = 'testCode';
    const TALK_MANAGER = 'talkManager';
    const DRAW = 'draw';
    const WRITE_TASK = 'writeTask';

    protected static $list = [
        self::WRITE_CODE => 'Write Code',
        self::TEST_CODE => 'Test Code',
        self::TALK_MANAGER => 'Talk Manager',
        self::DRAW => 'Draw',
        self::WRITE_TASK => 'Write Task',
    ];

    protected static $value;
}