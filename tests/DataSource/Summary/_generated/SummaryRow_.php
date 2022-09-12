<?php
/**
 * This file was generated by Atlas. Changes will be overwritten.
 */
declare(strict_types=1);

namespace Atlas\Mapper\DataSource\Summary\_generated;

use Atlas\Table\Row;

/**
 * @property mixed $summary_id INTEGER
 * @property mixed $thread_id INTEGER NOT NULL
 * @property mixed $reply_count INTEGER NOT NULL
 * @property mixed $view_count INTEGER NOT NULL
 */
abstract class SummaryRow_ extends Row
{
    protected mixed $summary_id = null;
    protected mixed $thread_id = null;
    protected mixed $reply_count = 0;
    protected mixed $view_count = 0;
}