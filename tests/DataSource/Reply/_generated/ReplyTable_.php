<?php
/**
 * This file was generated by Atlas. Changes will be overwritten.
 */
declare(strict_types=1);

namespace Atlas\Mapper\DataSource\Reply\_generated;

use Atlas\Table\Table;
use Atlas\Mapper\DataSource\Reply\ReplyRow;
use Atlas\Mapper\DataSource\Reply\ReplyTableSelect;

/**
 * @method ?ReplyRow fetchRow(mixed $primaryVal)
 * @method ReplyRow[] fetchRows(array $primaryVals)
 * @method ReplyTableSelect select(array $whereEquals = [])
 * @method ReplyRow newRow(array $cols = [])
 * @method ReplyRow newSelectedRow(array $cols)
 */
abstract class ReplyTable_ extends Table
{
    public const DRIVER = 'sqlite';

    public const NAME = 'replies';

    public const COLUMNS = [
        'reply_id' => [
            'name' => 'reply_id',
            'type' => 'INTEGER',
            'size' => null,
            'scale' => null,
            'notnull' => false,
            'default' => null,
            'autoinc' => true,
            'primary' => true,
            'options' => null,
        ],
        'thread_id' => [
            'name' => 'thread_id',
            'type' => 'INTEGER',
            'size' => null,
            'scale' => null,
            'notnull' => true,
            'default' => null,
            'autoinc' => false,
            'primary' => false,
            'options' => null,
        ],
        'author_id' => [
            'name' => 'author_id',
            'type' => 'INTEGER',
            'size' => null,
            'scale' => null,
            'notnull' => true,
            'default' => null,
            'autoinc' => false,
            'primary' => false,
            'options' => null,
        ],
        'body' => [
            'name' => 'body',
            'type' => 'TEXT',
            'size' => null,
            'scale' => null,
            'notnull' => false,
            'default' => null,
            'autoinc' => false,
            'primary' => false,
            'options' => null,
        ],
    ];

    public const PRIMARY_KEY = [
        'reply_id',    ];

    public const COMPOSITE_KEY = false;

    public const AUTOINC_COLUMN = 'reply_id';

    public const AUTOINC_SEQUENCE = null;

    public const ROW_CLASS = ReplyRow;
}